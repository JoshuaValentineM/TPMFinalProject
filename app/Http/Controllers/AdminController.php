<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getAdminDashboard(Request $request)
    {
        $teamId = $request->user()->id;
        // $teams = DB::table('users')->where('id', $teamId)->get()->toArray();
        $teams = User::all();
        return view('admindashboard', ['teams' => $teams]);
    }

    public function verifyTeam($id)
    {
        $teams = User::find($id);

        $teams->update(['verification' => 1,]);

        return redirect(route('getAdminDashboard'));
    }

    public function searchTeam()
    {
        $search = $_GET['query'];
        $teams = User::where('username', 'LIKE', '%' . $search . '%')->get();
        return view('admindashboard', compact('teams'));
    }

    public function verifiedTeamList()
    {
        $teams = User::where('verification', 1)->get();
        return view('admindashboard', compact('teams'));
    }

    public function getAdminParticipant(Request $request)
    {
        $teamId = $request->user()->id;
        // $teams = DB::table('users')->where('id', $teamId)->get()->toArray();
        $teams = User::all();
        return view('adminparticipants', ['teams' => $teams]);
    }

    public function verifiedTeamParticipantList()
    {
        $teams = User::where('verification', 1)->get();
        return view('adminparticipants', compact('teams'));
    }
}