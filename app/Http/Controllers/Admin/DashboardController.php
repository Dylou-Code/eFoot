<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $userCount = $users->count();

        $teams = Team::all();
        $teamCount = $teams->count();

        $competitions = Competition::all();
        $competitionCount = $competitions->count();

        return view('admin.dashboard', compact('userCount','competitionCount', 'teamCount'));
    }
}
