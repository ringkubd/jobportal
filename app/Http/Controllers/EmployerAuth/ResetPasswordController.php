<?php

declare(strict_types=1);

namespace App\Http\Controllers\EmployerAuth;

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

    protected string $redirectTo = '/employer/home';

    public function __construct()
    {
        $this->middleware('employer.guest');
    }

    public function showResetForm(Request $request, string $token = null): View
    {
        return view('employer.auth.passwords.reset')->with([
            'token' => $token,
            'email' => $request->email,
        ]);
    }

    public function broker(): PasswordBroker
    {
        return Password::broker('employers');
    }

    protected function guard(): StatefulGuard
    {
        return Auth::guard('employer');
    }
}