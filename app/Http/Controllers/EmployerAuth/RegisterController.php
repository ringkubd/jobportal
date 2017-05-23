<?php

namespace App\Http\Controllers\EmployerAuth;

use App\Employer;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyEmail;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/employer/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('employer.guest');
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:employers',
            'password' => 'required|min:6|confirmed',
            'slug'  => 'required|max:50',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Employer
     */
    protected function create(array $data)
    {
        $employer =  Employer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'slug'  => $data['slug'],
            'verifyToken'=>Str::random(40),
        ]);
        $thisUser = Employer::findOrFail($employer->id);
        $this->SendMail($thisUser);
        return $employer;
    }

    protected function SendMail($thiUser)
    {
        Mail::to($thiUser['email'])->send(new verifyEmail($thiUser));
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('employer.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    // protected function guard()
    // {
    //     return Auth::guard('employer');
    // }

    public function SendMailDone($email,$verifyToken)
    {
        $check = Employer::where('email',$email)->where('verifyToken',$verifyToken)->first();
        if ($check) {
            Employer::where('email',$email)->where('verifyToken',$verifyToken)->update(['status'=>1,'verifyToken'=>'']);
            return redirect(url('employer/login'));
        }
    }
}
