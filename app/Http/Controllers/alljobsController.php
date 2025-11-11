<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Applied_job;
use App\block;
use App\catagory;
use App\follower;
use App\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class alljobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('jobseeker');
    }

    public function index(): View
    {
        $jobseekerId = auth('jobseeker')->id();
        $totalApplied = Applied_job::where('jobseeker_id', $jobseekerId)->count();
        return view('jobseeker.home', compact('totalApplied'));
    }

    public function showalljobs(): View
    {
        $jobseekerId = auth('jobseeker')->id();
        $categories = catagory::all();

        $blockedEmployerIds = block::where('jobseeker_id', $jobseekerId)->pluck('employer_id');
        $followedEmployerIds = follower::where('jobseeker_id', $jobseekerId)->pluck('employer_id');

        $jobsQuery = Job::where('published', 1)
            ->whereNotIn('employer_id', $blockedEmployerIds)
            ->with('employer.profile');

        if ($followedEmployerIds->isNotEmpty()) {
            $jobsQuery->orderByRaw('FIELD(employer_id, ' . $followedEmployerIds->implode(',') . ') DESC, id DESC');
        } else {
            $jobsQuery->orderBy('id', 'desc');
        }

        $jobs = $jobsQuery->paginate(10);

        return view('jobseeker.job', compact('job', 'catagories'));
    }

    public function show(int $categoryId): View
    {
        $jobseekerId = auth('jobseeker')->id();
        $blockedEmployerIds = block::where('jobseeker_id', $jobseekerId)->pluck('employer_id');
        $categories = catagory::all();

        $categoryJobs = Job::where('catagory_id', $categoryId)
            ->where('published', 1)
            ->whereNotIn('employer_id', $blockedEmployerIds)
            ->paginate(10);

        return view('jobseeker.showjobsbycat', compact('catjobs', 'catagories'));
    }

    public function jobsdescription(int $jobId): View
    {
        $job = Job::with([
            'employer.profile',
            'catagory',
            'industrytype',
            'district',
            'division'
        ])->findOrFail($jobId);

        $relatedJobs = Job::where('catagory_id', $job->catagory_id)
            ->where('id', '!=', $jobId)
            ->with(['employer.profile', 'division'])
            ->inRandomOrder()
            ->take(10)
            ->get();

        $isApplied = auth('jobseeker')->check() ?
            Applied_job::where('job_id', $jobId)->where('jobseeker_id', auth('jobseeker')->id())->exists() :
            false;

        $categories = catagory::all();

        return view('jobseeker.showjobsbyid', [
            'jobdata' => [$job],
            'catagories' => $categories,
            'apply' => $isApplied,
            'relatedJobs' => $relatedJobs,
        ]);
    }

    public function applyjob(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'jobid' => 'required|integer|exists:jobs,id',
            'expected_sallary' => 'nullable|numeric',
        ]);

        $jobseekerId = auth('jobseeker')->id();
        $jobId = $validatedData['jobid'];

        if (Applied_job::where('job_id', $jobId)->where('jobseeker_id', $jobseekerId)->exists()) {
            return redirect()->to('jobseeker/alljobsshow/' . $jobId)
                ->with('applied', 'You have already applied for this job.');
        }

        $job = Job::findOrFail($jobId);

        Applied_job::create([
            'job_id' => $jobId,
            'jobseeker_id' => $jobseekerId,
            'employer_id' => $job->employer_id,
            'expected_salary' => $validatedData['expected_sallary'],
        ]);

        return redirect()->to('jobseeker/managejobs')
            ->with('applied', 'You have successfully applied for the job.');
    }
}