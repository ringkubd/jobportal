<?php

declare(strict_types=1);

namespace App\Http\Controllers\EmployerAuth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('employer.guest');
    }

    public function showLinkRequestForm(): View
    {
        return view('employer.auth.passwords.email');
    }

    public function broker(): PasswordBroker
    {
        return Password::broker('employers');
    }
}