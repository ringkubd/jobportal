<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Jobseeker;
use App\jobseeker_contact_me;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class portfolioController extends Controller
{
    public function index(int $jobseekerId): View
    {
        $jobseeker = Jobseeker::with([
            'extraactivities',
            'personaldetail',
            'js_options',
            'js_skills',
            'js_workexperiences',
            'js_projects'
        ])->findOrFail($jobseekerId);

        $socialLinks = $jobseeker->js_options->whereIn('option_name', ['facebook', 'linkedin', 'twitter', 'google-plus']);
        $aboutMe = $jobseeker->js_options->where('slug', 'about_me')->first();

        return view('js_portofolio.inde', [
            'js_banner_info' => $jobseeker,
            'js_sociallink' => $socialLinks,
            'aboutme' => $aboutMe,
            'skilldetails' => $jobseeker->js_skills,
            'workexperience' => $jobseeker->js_workexperiences,
            'project' => $jobseeker->js_projects,
            'jid' => $jobseekerId,
        ]);
    }

    public function contact_me(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'jobseekerid' => 'required|integer|exists:jobseekers,id',
            'sendername' => 'required|string|max:255',
            'senderemail' => 'required|email|max:255',
            'number' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        jobseeker_contact_me::create($validatedData);

        return response()->json(['message' => 'Message Sent']);
    }
}