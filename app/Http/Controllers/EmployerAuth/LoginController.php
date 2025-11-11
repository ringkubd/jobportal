<?php

declare(strict_types=1);

namespace App\Http\Controllers\EmployerAuth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('employer.guest')->except('logout');
    }

    public function redirectTo(): string
    {
        return '/employer/profile/' . auth('employer')->id();
    }

    public function showLoginForm(): View
    {
        return view('employer.auth.login');
    }

    protected function guard(): StatefulGuard
    {
        return Auth::guard('employer');
    }

    public function logout(Request $request): RedirectResponse
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/employer/login');
    }

    protected function credentials(Request $request): array
    {
        return [
            'email' => $request->{$this->username()},
            'password' => $request->password,
            'status' => '1',
        ];
    }
}