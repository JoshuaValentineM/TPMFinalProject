<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Http\Requests\PaymentRequest;
use App\Models\Member;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    // public function getDashboard()
    // {
    //     return view('dashboard');
    // }


    public function createMember(MemberRequest $request, $id, $memberNumber)
    {
        $CV = $request->CV;
        $CVName = time() . '.' . $CV->getClientOriginalExtension();
        $request->CV->move('fileStorageCV', $CVName);

        $IDCard = $request->IDCard;
        $IDCardName = time() . '.' . $IDCard->getClientOriginalExtension();
        $request->IDCard->move('fileStorageIDCard', $IDCardName);


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
            'CV' => $CV,
            // 'flazzCard' => $request['flazzCard'],
            'IDCard' => $IDCard,
            'teamId' => $id,
            'memberNumber' => $memberNumber,
        ]);

        // return view('dashboard', ['teamId' => $teamId]);
        // return view('dashboard', ['teamId' => $teamId], ['members' => $members]);
        return redirect(route('getDashboard'));
    }

    public function getDashboard(Request $request)
    {
        $teamId = $request->user()->id;
        $members = DB::table('members')->where('teamId', $teamId)->get()->toArray();
        // $leader = $request->user()->fullName;
        $leaders = DB::table('users')->where('id', $teamId)->get()->toArray();
        $membernomor1 = DB::table('members')->where('teamId', $teamId)->where('memberNumber', 1)->get()->toArray();
        $membernomor2 = DB::table('members')->where('teamId', $teamId)->where('memberNumber', 2)->get()->toArray();
        $membernomor3 = DB::table('members')->where('teamId', $teamId)->where('memberNumber', 3)->get()->toArray();
        // dd($leaders);
        // dd($membernomor1, $membernomor2);
        // $members = Member::all();
        return view('dashboard', ['teamId' => $teamId, 'members' => $members, 'membernomor1' => $membernomor1, 'membernomor2' => $membernomor2, 'membernomor3' => $membernomor3,], ['leaders' => $leaders]);
    }

    public function getTeamPaymentById(Request $request)
    {
        $teamId = $request->user()->id;
        return view('payment', ['teamId' => $teamId]);
    }

    // merupakan Cara upload file bukti ke tabel payment
    public function createPayment(PaymentRequest $request, $id)
    {
        $payment = $request->payment;
        $paymentName = time() . '.' . $payment->getClientOriginalExtension();
        $request->payment->move('fileStoragepayment', $paymentName);

        // $payment_file_name = $request->payment->getClientOriginalName();
        // $payment = $request->file('payment')->storeAs('payment-data', $payment_file_name);

        Payment::create([
            'payment' => $payment,
            'teamId' => $id,
        ]);
        return redirect(route('halamanUtama'));
    }

    // public function createPayment(PaymentRequest $request, $payment)
    // {
    //     // $payment = $request->payment;
    //     // $paymentName = time() . '.' . $payment->getClientOriginalExtension();
    //     // $request->payment->move('fileStoragepayment', $paymentName);

    //     $payment_file_name = $request->payment->getClientOriginalName();
    //     $payment = $request->file('payment')->storeAs('payment-data', $payment_file_name);

    //     $bukti = User::findOrFail($payment);

    //     return view('halamanUtama', [
    //         'bukti' => $payment
    //     ]);
    // } <<<<<--------- merupakan cara upload file bukti ke tabel user langsung (tapibelomjadi)
}
