<?php

declare(strict_types=1);

namespace App\Http\Controllers\JobseekerAuth;

use App\Http\Controllers\Controller;
use App\Jobseeker;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected string $redirectTo = '/jobseeker/home';

    public function __construct()
    {
        $this->middleware('jobseeker.guest');
    }

    protected function validator(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:jobseekers'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    protected function create(array $data): Jobseeker
    {
        return Jobseeker::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm(): View
    {
        return view('jobseeker.auth.register');
    }

    protected function guard(): StatefulGuard
    {
        return Auth::guard('jobseeker');
    }
}