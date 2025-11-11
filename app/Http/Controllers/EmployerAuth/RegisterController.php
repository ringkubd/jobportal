<?php

declare(strict_types=1);

namespace App\Http\Controllers\EmployerAuth;

use App\Employer;
use App\Http\Controllers\Controller;
use App\Mail\verifyEmail;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\View\View;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected string $redirectTo = '/employer/login';

    public function __construct()
    {
        $this->middleware('employer.guest');
    }

    protected function validator(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:employers'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'slug' => ['required', 'string', 'max:50'],
        ]);
    }

    protected function create(array $data): Employer
    {
        $employer = Employer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'slug' => $data['slug'],
            'verifyToken' => Str::random(40),
        ]);

        $this->sendMail($employer);

        return $employer;
    }

    protected function sendMail(Employer $employer): void
    {
        app(Mailer::class)->to($employer->email)->send(new verifyEmail($employer));
    }

    public function showRegistrationForm(): View
    {
        return view('employer.auth.register');
    }

    protected function guard(): StatefulGuard
    {
        return Auth::guard('employer');
    }

    public function sendMailDone(string $email, string $verifyToken): RedirectResponse
    {
        $employer = Employer::where('email', $email)->where('verifyToken', $verifyToken)->first();

        if ($employer) {
            $employer->update(['status' => 1, 'verifyToken' => '']);
            return redirect($this->redirectTo);
        }

        return redirect($this->redirectTo)->withErrors(['email' => 'Invalid verification link.']);
    }
}