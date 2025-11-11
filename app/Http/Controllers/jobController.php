<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Applied_job;
use App\catagory;
use App\district;
use App\industrytype;
use App\Job;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class jobController extends Controller
{
    public function __construct()
    {
        $this->middleware('employer');
    }

    public function getjobsinfo(): View
    {
        $employerId = auth('employer')->id();

        $jobs = Job::where('employer_id', $employerId)->paginate(2);
        $categories = catagory::pluck('catagoryname', 'id');
        $industries = industrytype::pluck('industrytypename', 'id');
        $divisions = district::pluck('name', 'id');

        $appliedCounts = [];
        foreach ($jobs as $job) {
            $appliedCounts[$job->id] = Applied_job::where('job_id', $job->id)->count();
        }

        return view('employer.job', compact(
            'appliedCounts',
            'categories',
            'industries',
            'jobs',
            'divisions'
        ));
    }

    public function post_job(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'catagory_id' => ['required', 'integer'],
            'industrytype_id' => ['required', 'integer'],
            'salaryrange' => ['required', 'string', 'max:255'],
            'jobtitle' => ['required', 'string', 'max:255'],
            'vacancies' => ['required', 'integer'],
            'instruction' => ['required', 'string'],
            'email' => ['required', 'email', 'max:255'],
            'deadline' => ['required', 'date'],
            'contactperson' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'division' => ['required', 'integer'],
            'districts' => ['required', 'integer'],
            'agerange' => ['required', 'string', 'max:255'],
            'jobtype' => ['required', 'string', 'max:255'],
            'joblevel' => ['required', 'string', 'max:255'],
            'educational_qualification' => ['required', 'string'],
            'job_responsibilities' => ['required', 'string'],
            'job_experiences_year' => ['required', 'integer'],
            'job_experiences_field' => ['required', 'string'],
        ]);

        $validatedData['employer_id'] = auth('employer')->id();
        $validatedData['division_id'] = $validatedData['division'];
        $validatedData['district_id'] = $validatedData['districts'];

        Job::create($validatedData);

        return redirect()->route('employer.jobs.info')->with('status', 'Job posted successfully.');
    }

    public function show_job_on_emp_dashboard(): View
    {
        $employerId = auth('employer')->id();
        $jobs = Job::where('employer_id', $employerId)->paginate(2);

        return view('employer.job', compact('jobs'));
    }

    public function edit_job_employer_dashboard(Request $request, Job $job): RedirectResponse
    {
        $validatedData = $request->validate([
            'catagory_id' => ['required', 'integer'],
            'industrytype_id' => ['required', 'integer'],
            'salaryrange' => ['required', 'string', 'max:255'],
            'jobtitle' => ['required', 'string', 'max:255'],
            'vacancies' => ['required', 'integer'],
            'instruction' => ['required', 'string'],
            'email' => ['required', 'email', 'max:255'],
            'deadline' => ['required', 'date'],
            'contactperson' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'division' => ['required', 'integer'],
            'districts' => ['required', 'integer'],
            'agerange' => ['required', 'string', 'max:255'],
            'jobtype' => ['required', 'string', 'max:255'],
            'joblevel' => ['required', 'string', 'max:255'],
            'educational_qualification' => ['required', 'string'],
            'job_responsibilities' => ['required', 'string'],
            'job_experiences_year' => ['required', 'integer'],
            'job_experiences_field' => ['required', 'string'],
        ]);

        $validatedData['division_id'] = $validatedData['division'];
        $validatedData['district_id'] = $validatedData['districts'];

        $job->update($validatedData);

        return redirect()->route('employer.jobs.info')->with('status', 'Job updated successfully.');
    }

    public function job_edit(Job $job): JsonResponse
    {
        return response()->json($job);
    }

    public function delte_job_employer_dashboard(Job $job): JsonResponse
    {
        $job->delete();

        return response()->json(['message' => 'Job deleted successfully.']);
    }

    public function showJobDetails(Job $job): JsonResponse
    {
        $job->load(['empprofile', 'catagory', 'industrytype']);

        return response()->json($job);
    }

    public function return_district_by_division_id(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'division_id' => ['required', 'integer'],
        ]);

        $districts = district::where('division_id', $validatedData['division_id'])->get();

        return response()->json($districts);
    }
}