<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamRequest;
use App\Models\Competition;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$teams = Team::all();
        //$teams->roles()->attach($competitionId);
        $teams = Team::with('competitions')->get();

        return view('admin.teams.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $competitions = Competition::all();
        return view('admin.teams.create', compact('competitions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamRequest $request)
    {
        /*$buy = User::findOrFail($userId)->buy()->create($request->all());
        $buy->codec()->attach([codec_ids]);*/
        $imageName = $request->image->store('teams');
        $team = new Team([
            'name' => $request->name,
            'image' => $imageName,
            'competition_position' => $request->competition_position
        ]);
       /* Team::create([
            'name' => $request->name,
            'image' => $imageName,
            'competition_position' => $request->competition_position
        ]);*/


        $team->save();

        $selectedCompetition = $request->input('competitions', []);
        $team->competitions()->attach($selectedCompetition);

        return redirect()->route('admin.teams.index')->with('success', 'Equipe ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $competitions = Competition::all();

        return view('admin.teams.edit', compact('team','competitions'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTeamRequest $request,Team $team)
    {
        if ($request->has("image")) {

            //On supprime l'ancienne image
            Storage::delete($team->image);
            $imagePath = $request->image->store("teams");
        }

        // 3. On met à jour les informations de l'equipe
        $team->update([
            "name" => $request->name,
            "image" => isset($imagePath) ? $imagePath : $team->image,
            'competition_position' => $request->competition_position,

        ]);

        $team->competitions()->sync($request->input('competitions', []));

        /* return redirect()->route('admin.users.index')->with('success', 'Utilisateur Modifié avec succès');*/
        return redirect('/dashboard')->with('success', 'Equipe modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if ($team->image) {
            if (!Storage::delete($team->image)) {
                return redirect('/dashboard/competitions')->with('error', 'La suppression de l\'image a échoué');
            }
        }

        $team->competitions()->detach();

        if (!$team->delete()) {
            return redirect('/dashboard/competitions')->with('error', 'La suppression de la compétition a échoué');
        }

       /* $ImagePath = 'image/'.$team->image;
        unset($ImagePath);
        $team->competitions()->detach();
        $team->delete();*/

        return redirect('/dashboard/teams')->with('success', 'L\'equipe a été supprimée avec succès');
    }

   /* public function sortTeams(Request $request)
    {
        $direction = $request->input('direction');
        $teams = Team::all();

        if ($direction == 'asc') {
            $teams = $teams->sortBy('name');
        } elseif ($direction == 'desc') {
            $teams = $teams->sortByDesc('name');
        }

        return view('team.index', compact('teams'));
    }*/

}
