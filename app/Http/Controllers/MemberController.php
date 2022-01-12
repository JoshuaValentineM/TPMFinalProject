<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    // public function getDashboard()
    // {
    //     return view('dashboard');
    // }

    public function getDashboard(Request $request)
    {
        $teamId = $request->user()->id;
        $members = DB::table('members')->where('teamId', $teamId)->get()->toArray();
        // $leader = $request->user()->fullName;
        $leaders = DB::table('users')->where('id', $teamId)->get()->toArray();
        // dd($leaders);
        // $members = Member::all();
        return view('dashboard', ['teamId' => $teamId, 'members' => $members], ['leaders' => $leaders]);
    }

    public function createMember(MemberRequest $request, $id)
    {
        // $members = DB::table('members')->where('teamId', $id)->get()->toArray();
        // // // $members = Member::all();
        // $teamId = $request->user()->id;
        Member::create([
            'fullName' => $request['fullName'],
            'email' => $request['email'],
            'whatsappNumber' => $request['whatsappNumber'],
            'lineID' => $request['lineID'],
            'githubGitlabID' => $request['githubGitlabID'],
            'birthPlace' => $request['birthPlace'],
            'dayBirthDate' => $request['dayBirthDate'],
            'monthBirthDate' => $request['monthBirthDate'],
            'yearBirthDate' => $request['yearBirthDate'],
            'CV' => $request['CV'],
            // 'flazzCard' => $request['flazzCard'],
            'IDCard' => $request['IDCard'],
            'teamId' => $id,
        ]);

        // return view('dashboard', ['teamId' => $teamId]);
        // return view('dashboard', ['teamId' => $teamId], ['members' => $members]);
        return redirect(route('getDashboard'));
    }
}
