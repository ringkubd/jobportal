<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Applied_job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class emp_applied_job_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('employer');
    }

    public function applied_job(): View
    {
        $appliedJob = Applied_job::with([
            'academic.examTitle',
            'applicationinfo',
            'extraactivity',
            'languagepro',
            'personaldetail',
            'reference',
            'specialization',
            'training',
            'jobseeker',
        ])->first();

        if (!$appliedJob) {
            return view('employer.no-applicants');
        }

        return view('employer.cv_view', ['applicant' => $appliedJob]);
    }

    public function shorlisted_candidate(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'jobseeker_id' => ['required', 'integer'],
            'job_id' => ['required', 'integer'],
            'remove' => ['required', 'string', 'in:add,remove'],
        ]);

        $shortlistValue = $validatedData['remove'] === 'add' ? 1 : 0;

        Applied_job::where('jobseeker_id', $validatedData['jobseeker_id'])
            ->where('job_id', $validatedData['job_id'])
            ->update(['short_list' => $shortlistValue]);

        return redirect()->route('employer.applicantcv', [
            'id' => $validatedData['jobseeker_id'],
            'jobid' => $validatedData['job_id'],
        ]);
    }

    public function cv(): View
    {
        return view('employer.cv_view');
    }
}