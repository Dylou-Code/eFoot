<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompetitionRequest;
use App\Models\Competition;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitions = Competition::withCount('teams')->get();
        return view('admin.competitions.index',compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.competitions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompetitionRequest $request)
    {
        //renvoi un objet où l'on peut appliquer la methode store
        //va créer un dossier compétition dans le storage
        $imageName = $request->image->store('competitions');
        Competition::create([
            'name' => $request->name,
            'image' => $imageName
        ]);
        //$competition->save();


        return redirect()->route('admin.competitions.index')->with('success', 'Compétition ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $competitions = Competition::with('teams')->find($id);
        $competition = Competition::all();
        return view('admin.competitions.show', compact('competitions','competition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Competition $competition)
    {
        return view('admin.competitions.edit', compact('competition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCompetitionRequest $request, Competition $competiton)
    {

        // 2. On upload l'image dans "/storage/app/public/posts"
        if ($request->has("image")) {

            //On supprime l'ancienne image
            Storage::delete($competiton->image);
            $imagePath = $request->image->store("competitions");
        }

        // 3. On met à jour les informations du Post
        $competiton->update([
            "name" => $request->name,
            "image" => isset($imagePath) ? $imagePath : $competiton->image
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competition $competition)
    {

        if ($competition->image) {
            if (!Storage::delete($competition->image)) {
                return redirect('/dashboard/competitions')->with('error', 'La suppression de l\'image a échoué');
            }
        }

        $competition->teams()->detach();

        if (!$competition->delete()) {
            return redirect('/dashboard/competitions')->with('error', 'La suppression de la compétition a échoué');
        }

        return redirect('/dashboard/competitions')->with('success', 'La compétition a été supprimée avec succès');

        /*Storage::delete($competition->picture);

        $competition->teams()->detach();
        $competition->delete();

        return redirect('/dashboard/competitions')->with('success', 'La competition a été supprimée avec succès');*/
    }


}
