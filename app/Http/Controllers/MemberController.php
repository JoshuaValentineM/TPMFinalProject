<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    // public function getDashboard()
    // {
    //     return view('dashboard');
    // }

    public function createMember(MemberRequest $request, $id)
    {
        $teamId = $request->user()->id;
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

        return view('dashboard', ['teamId' => $teamId]);
    }

    public function getDashboard(Request $request)
    {
        $teamId = $request->user()->id;
        return view('dashboard', ['teamId' => $teamId]);
    }
}
