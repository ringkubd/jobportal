<?php

declare(strict_types=1);

namespace App\Http\Controllers\JobseekerAuth;

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

    protected string $redirectTo = '/jobseeker/home';

    public function __construct()
    {
        $this->middleware('jobseeker.guest')->except('logout');
    }

    public function showLoginForm(): View
    {
        return view('jobseeker.auth.login');
    }

    protected function guard(): StatefulGuard
    {
        return Auth::guard('jobseeker');
    }

    public function logout(Request $request): RedirectResponse
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect('jobseeker');
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