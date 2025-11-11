<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Jobseeker;
use Illuminate\View\View;

class cvController extends Controller
{
    public function __construct()
    {
        $this->middleware('jobseeker');
    }

    public function cv(): View
    {
        $jobseekerId = auth('jobseeker')->id();

        $jobseeker = Jobseeker::with([
            'personaldetail',
            'academics.examTitle',
            'academics.groupormajor',
            'applicationinfo',
            'trainings',
            'extraactivities'
        ])->findOrFail($jobseekerId);

        return view('jobseeker.cv', [
            'personalDetails' => $jobseeker->personaldetail,
            'academics' => $jobseeker->academics,
            'career' => $jobseeker->applicationinfo,
            'trainings' => $jobseeker->trainings,
            'extraActivities' => $jobseeker->extraactivities->pluck('details')->flatMap(fn ($item) => explode(',', $item)),
        ]);
    }
}