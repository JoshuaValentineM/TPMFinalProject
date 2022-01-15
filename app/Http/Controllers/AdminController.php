<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getAdminDashboard(Request $request)
    {
        $teamId = $request->user()->id;
        // $teams = DB::table('users')->where('id', $teamId)->get()->toArray();
        $teams = User::all()->except(1);
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
        // dd($teams);
        return view('admindashboard', compact('teams'));
        // return view('admindashboard', ['teams' => $teams]);
    }

    public function unverifiedTeamList()
    {
        $teams = User::where('verification', 0)->get()->toArray();
        // dd($teams);
        return view('admindashboard', compact('teams'));
        // return view('admindashboard', ['teams' => $teams]);
    }

    public function getAdminParticipant(Request $request)
    {
        $teamId = $request->user()->id;
        // $teams = DB::table('users')->where('id', $teamId)->get()->toArray();
        $teams = User::all()->except(1);
        return view('adminparticipants', ['teams' => $teams]);
    }

    public function verifiedTeamParticipantList()
    {
        $teams = User::where('verification', 1)->get();
        return view('adminparticipants', compact('teams'));
    }

    public function downloadCV(Request $request, $id)
    {
        $file = public_path('fileStorageCV/1642091972.jpg');
        // $teams = User::where('id', $id)->get();
        // $filename = $request->$teams->payment;
        // dd($filename);
        // $file = storage_path('app/payment-data/' . $filename);

        // $file = storage_path('app/payment-data/temp.jpg');


        // return response()->download(public_path('filestorageCV/' . $CV));
        return response()->download($file);
        // return response()->download($file);
    }

    public function viewParticipant($id)
    {
        // $teams = User::where('id', $id)->get();
        // $teams = User::all();
        $teams = $id;
        $leaders = DB::table('users')->where('id', $teams)->get()->toArray();
        $members = DB::table('members')->where('teamId', $teams)->get()->toArray();
        // dd($teams, $members, $leaders);
        return view('admin-member-view', ['members' => $members,], ['leaders' => $leaders]);
    }

    public function editParticipant($id)
    {
        // $teams = User::where('id', $id)->get();
        // $teams = User::all();
        $teams = $id;
        $leaders = DB::table('users')->where('id', $teams)->get()->toArray();
        $members = DB::table('members')->where('teamId', $teams)->get()->toArray();
        // dd($teams, $members, $leaders);
        return view('admin-member-select', ['members' => $members,], ['leaders' => $leaders]);
    }

    public function editParticipantLeader($id)
    {
        // $teams = User::where('id', $id)->get();
        // $teams = User::all();
        $teams = $id;
        $leaders = DB::table('users')->where('id', $teams)->get()->toArray();
        $members = DB::table('members')->where('teamId', $teams)->get()->toArray();
        // dd($teams, $members, $leaders);
        return view('admin-leader-edit', ['members' => $members,], ['leaders' => $leaders]);
    }

    public function updateParticipantLeader(Request $request, $id)
    {
        $team = User::find($id);

        $team->update([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'whatsappNumber' => $request->whatsappNumber,
            'lineID' => $request->lineID,
            'githubGitlabID' => $request->githubGitlabID,
            'birthPlace' => $request->birthPlace,
            'dayBirthDate' => $request->dayBirthDate,
            'monthBirthDate' => $request->monthBirthDate,
            'yearBirthDate' => $request->yearBirthDate,
        ]);

        return redirect(route('getAdminParticipant'));
    }

    public function editParticipantMember($id, $memberid)
    {
        // $teams = User::where('id', $id)->get();
        // $teams = User::all();
        $teams = $id;
        $membersid = $memberid;
        // $members = $id;
        // $teams = $request->user()->id;
        $leaders = DB::table('users')->where('id', $teams)->get()->toArray();
        $members = DB::table('members')->where('id', $membersid)->get()->toArray();

        // dd($teams, $leaders, $members);
        return view('admin-member-edit', ['members' => $members,], ['leaders' => $leaders]);
    }

    // public function updateParticipantMember(Request $request, $id)
    // {
    //     // $teams = User::where('id', $id)->get();
    //     // $teams = User::all();
    //     $teams = $id;
    //     // $membersid = $memberid;
    //     $leaders = DB::table('users')->where('id', $teams)->get()->toArray();
    //     $members = DB::table('members')->where('id', $teams)->get()->toArray();
    //     // dd($teams, $leaders, $members);
    //     $members->update([
    //         'fullName' => $request->fullName,
    //         'email' => $request->email,
    //         'whatsappNumber' => $request->whatsappNumber,
    //         'lineID' => $request->lineID,
    //         'githubGitlabID' => $request->githubGitlabID,
    //         'birthPlace' => $request->birthPlace,
    //         'dayBirthDate' => $request->dayBirthDate,
    //         'monthBirthDate' => $request->monthBirthDate,
    //         'yearBirthDate' => $request->yearBirthDate,
    //     ]);
    //     return view('admin-member-edit', ['members' => $members,], ['leaders' => $leaders]);
    // }

    public function updateParticipantMember(MemberRequest $request, $id)
    {
        $member = Member::find($id);
        $leader = User::find($id);
        // dd($member);
        $member->update([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'whatsappNumber' => $request->whatsappNumber,
            'lineID' => $request->lineID,
            'githubGitlabID' => $request->githubGitlabID,
            'birthPlace' => $request->birthPlace,
            'dayBirthDate' => $request->dayBirthDate,
            'monthBirthDate' => $request->monthBirthDate,
            'yearBirthDate' => $request->yearBirthDate,
        ]);
        $members = DB::table('members')->where('id', $id)->get()->toArray();
        // dd($members);
        //$member = Member::where('id', $id);
        //$member = DB::table('members')->where('groupId',$groupId)->where('memberNo',$memberNo)->get();
        // return view('admin-member-edit', ['members' => $member]);
        return redirect(route('getAdminParticipant'));
    }
}
