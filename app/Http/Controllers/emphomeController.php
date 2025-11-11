<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Applied_job;
use App\Employer;
use App\Job;
use App\personaldetails;
use Illuminate\Http\Request;
use Illuminate\View\View;

class emphomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('employer');
    }

    public function showhomepage(): View
    {
        $employerId = auth('employer')->id();

        $jobCount = Job::where('employer_id', $employerId)->count();
        $publishedJobCount = Job::where('employer_id', $employerId)->where('published', 1)->count();
        $applicationCount = Applied_job::where('employer_id', $employerId)->count();
        $onlineUserCount = (new Employer())->allOnline()->count();

        $appliedJobInfos = Applied_job::with(['job', 'personaldetail'])
            ->where('employer_id', $employerId)
            ->get();

        return view('employer.emp_homepage', compact(
            'jobCount',
            'onlineUserCount',
            'publishedJobCount',
            'applicationCount',
            'appliedJobInfos'
        ));
    }

    public function applicant_list(Request $request): View
    {
        $employerId = auth('employer')->id();

        $approvedJobs = Job::where('employer_id', $employerId)
            ->where('published', 1)
            ->select('id', 'jobtitle')
            ->get();

        $appliedJobInfos = Job::where('jobs.employer_id', $employerId)
            ->where('applied_jobs.short_list', 0)
            ->join('applied_jobs', 'applied_jobs.job_id', '=', 'jobs.id')
            ->join('personaldetails', 'personaldetails.jobseeker_id', '=', 'applied_jobs.jobseeker_id')
            ->select('jobs.*', 'applied_jobs.*', 'personaldetails.*')
            ->get();

        $shortlistedApplicants = Job::where('jobs.employer_id', $employerId)
            ->where('applied_jobs.short_list', 1)
            ->join('applied_jobs', 'applied_jobs.job_id', '=', 'jobs.id')
            ->join('personaldetails', 'personaldetails.jobseeker_id', '=', 'applied_jobs.jobseeker_id')
            ->select('jobs.*', 'applied_jobs.*', 'personaldetails.*')
            ->get();

        if ($request->id) {
            $jobId = $request->id;
            return view('employer.applicant_list_single_job', compact(
                'jobId',
                'approvedJobs',
                'appliedJobInfos',
                'shortlistedApplicants'
            ));
        }

        return view('employer.applicant_list_all_job', compact(
            'approvedJobs',
            'appliedJobInfos',
            'shortlistedApplicants'
        ));
    }

    public function applicantcv(int $id, string $job_id = ''): View
    {
        $employerId = auth('employer')->id();

        $personaldetails = personaldetails::where('jobseeker_id', $id)->firstOrFail();
        $academicsdata = $personaldetails->academics;
        $trainings = $personaldetails->trainings;
        $references = $personaldetails->references;
        $applicationinfo = $personaldetails->applicationinfo;

        $shortlisted = Applied_job::where('employer_id', $employerId)
            ->where('jobseeker_id', $id)
            ->where('job_id', $job_id)
            ->exists();

        return view('employer.applicantcv', compact(
            'personaldetails',
            'academicsdata',
            'trainings',
            'references',
            'applicationinfo',
            'shortlisted'
        ));
    }
}