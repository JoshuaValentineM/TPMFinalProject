<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'role' => ['required', 'string', 'max:255'],
            // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //username == teamname
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/', 'confirmed'],
            'binusian' => ['required', 'string', 'max:255'],
            'fullName' => ['required', 'string', 'max:255'],
            // 'emailLeader' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'whatsappNumber' => ['required', 'string', 'min:11', 'max:255', 'unique:users'],
            'lineID' => ['required', 'string', 'max:255', 'unique:users'],
            'githubGitlabID' => ['required', 'string', 'max:255'],
            'birthPlace' => ['required', 'string', 'max:255'],
            'dayBirthDate' => ['required', 'string', 'max:255'],
            'monthBirthDate' => ['required', 'string', 'max:255'],
            'yearBirthDate' => ['required', 'string', 'max:255'],
            'CV' => ['required', 'mimes:jpg,png,jpeg,pdf'],
            // 'flazzCard' => ['required', 'mimes:jpg,png,jpeg,pdf'],
            'IDCard' => ['required', 'mimes:jpg,png,jpeg,pdf'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // $CVName = request()->file('CV')->getClientOriginalName();
        // $CV = request()->file('CV')->storeAs('file-data', $CVName);

        // $flazzCardName = request()->file('CV')->getClientOriginalName();
        // $flazzCard = request()->file('CV')->storeAs('file-data', $flazzCardName);

        // $IDCard_file_name = request()->file('IDCard')->getClientOriginalName();
        // $IDCard = request()->file('IDCard')->storeAs('file-data', $IDCard_file_name);

        return User::create([
            'role' => $data['role'],
            // 'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'binusian' => $data['binusian'],
            'fullName' => $data['fullName'],
            // 'emailLeader' => $data['emailLeader'],
            'whatsappNumber' => $data['whatsappNumber'],
            'lineID' => $data['lineID'],
            'githubGitlabID' => $data['githubGitlabID'],
            'birthPlace' => $data['birthPlace'],
            'dayBirthDate' => $data['dayBirthDate'],
            'monthBirthDate' => $data['monthBirthDate'],
            'yearBirthDate' => $data['yearBirthDate'],
            'CV' => $data['CV'],
            // 'flazzCard' => $data['flazzCard'],
            'IDCard' => $data['IDCard'],
        ]);
    }
}
