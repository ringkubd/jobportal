<?php

declare(strict_types=1);

namespace App\Http\Controllers\JobseekerAuth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected string $redirectTo = '/jobseeker/home';

    public function __construct()
    {
        $this->middleware('jobseeker.guest');
    }

    public function showResetForm(Request $request, string $token = null): View
    {
        return view('jobseeker.auth.passwords.reset')->with([
            'token' => $token,
            'email' => $request->email,
        ]);
    }

    public function broker(): PasswordBroker
    {
        return Password::broker('jobseekers');
    }

    protected function guard(): StatefulGuard
    {
        return Auth::guard('jobseeker');
    }
}