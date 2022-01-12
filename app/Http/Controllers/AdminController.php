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
}
