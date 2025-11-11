<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\academic;
use App\applicationinfo;
use App\block;
use App\catagory;
use App\empprofile;
use App\follower;
use App\Jobseeker;
use App\js_reference;
use App\personaldetails;
use App\specialization;
use App\training;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class jobseekerController extends Controller
{
    public function __construct()
    {
        $this->middleware('jobseeker');
    }

    public function index(): View
    {
        $jobseekerId = auth('jobseeker')->id();
        $jobseeker = Jobseeker::with([
            'personaldetail',
            'applicationinfo',
            'academics.levelofeducation',
            'academics.examtitle',
            'academics.groupormajor',
            'skills',
            'trainings',
            'references',
            'extraactivities'
        ])->findOrFail($jobseekerId);

        $categories = catagory::all();
        $levelofeducations = DB::table('levelofeducations')->pluck('edulavelname', 'id');
        $examtitles = DB::table('exam_titles')->pluck('name', 'id');
        $groups = DB::table('groupoormajors')->pluck('groupname', 'id');

        return view('jobseeker.dashboard.dashboard', [
            'jobseeker' => $jobseeker,
            'personaldetails' => $jobseeker->personaldetail,
            'items' => $jobseeker->applicationinfo,
            'academicsdata' => $jobseeker->academics,
            'get_skill' => $jobseeker->skills,
            'get_training' => $jobseeker->trainings,
            'get_refference' => $jobseeker->references,
            'extraActivities' => $jobseeker->extraactivities->pluck('details')->flatMap(fn ($item) => explode(',', $item)),
            'catagories' => $categories,
            'levelofeducation' => $levelofeducations,
            'getexamtitle' => $examtitles,
            'getgroup' => $groups,
        ]);
    }

    public function infoupdate(Request $request): JsonResponse|string|RedirectResponse
    {
        $jobseekerId = auth('jobseeker')->id();

        switch ($request->action) {
            case 'showexamtitle':
                $examtitles = DB::table('exam_titles')->where('levelofeducation_id', $request->id)->get(['name', 'id']);
                return response()->json($examtitles);

            case 'showgroup_mejor':
                $groups = DB::table('groupoormajors')->where('exam_title_id', $request->exam_title_id)->get(['groupname', 'id']);
                return response()->json($groups);

            case 'pinfoupdate':
                $personaldetail = personaldetails::where('jobseeker_id', $jobseekerId)->firstOrFail();
                $validatedData = $request->validate([
                    'full_name' => 'required|string|max:255',
                    'jobseeker_father_name' => 'required|string|max:255',
                    'jobseeker_mother_name' => 'required|string|max:255',
                    'jobseeker_dob' => 'required|date',
                    'jobseeker_gender' => 'required|string',
                    'jobseeker_maritalstatus' => 'required|string',
                    'jobseeker_nationality' => 'required|string',
                    'jobseeker_national_id_no' => 'nullable|string',
                    'jobseeker_religion' => 'required|string',
                    'jobseeker_permanent_address' => 'required|string',
                    'jobseeker_current_address' => 'required|string',
                    'jobseeker_current_location' => 'required|string',
                    'jobseeker_phone1' => 'required|string',
                    'jobseeker_phone2' => 'nullable|string',
                    'jobseeker_email' => 'required|email',
                    'jobseeker_email2' => 'nullable|email',
                ]);
                $personaldetail->update($validatedData);
                return "#personal-tab";

            case 'cinfoupdate':
                $applicationinfo = applicationinfo::where('jobseeker_id', $jobseekerId)->firstOrFail();
                $validatedData = $request->validate([
                    'career_summary' => 'required|string',
                    'special_qualification' => 'required|string',
                    'preferred_job_category' => 'required|string',
                    'preferred_district' => 'required|string',
                    'preferred_division' => 'required|string',
                    'preferred_organization_type' => 'required|string',
                    'objective' => 'required|string', // career_objective
                    'looking_for' => 'required|string',
                    'available_for' => 'required|string',
                    'present_salary' => 'nullable|numeric',
                    'expected_salary' => 'nullable|numeric',
                ]);
                $applicationinfo->update($validatedData);
                return "#personal-tab";

            case 'education_infoupdate':
                $validatedData = $this->validateAcademic($request);
                $validatedData['jobseeker_id'] = $jobseekerId;
                academic::create($validatedData);
                return response()->json(['message' => 'Successfully Inserted']);

            case 'update_academic':
                return academic::findOrFail($request->edit_academicid);

            case 'education_editandupdate':
                $academic = academic::findOrFail($request->edit_academicid);
                $validatedData = $this->validateAcademic($request);
                $academic->update($validatedData);
                return response()->json(['message' => 'Successfully Updated']);

            case 'skill_insert':
                $validatedData = $request->validate([
                    'specializationorskill' => 'required|string|max:255',
                    'skilldescription' => 'required|string',
                ]);
                specialization::create([
                    'jobseeker_id' => $jobseekerId,
                    'specializationorskill' => $validatedData['specializationorskill'],
                    'skilldescription' => $validatedData['skilldescription'],
                ]);
                return response()->json(['message' => 'Successfully Inserted']);

            case 'skill_delete':
                specialization::findOrFail($request->delid)->delete();
                return response()->json(['message' => 'Data deleted successfully']);

            case 'training_insert':
                $validatedData = $this->validateTraining($request);
                $validatedData['jobseeker_id'] = $jobseekerId;
                training::create($validatedData);
                return response()->json(['message' => 'Successfully Inserted']);

            case 'training_delete':
                training::findOrFail($request->delid)->delete();
                return response()->json(['message' => 'Data deleted successfully']);

            case 'refference_insert':
                $validatedData = $this->validateReference($request);
                $validatedData['jobseeker_id'] = $jobseekerId;
                js_reference::create($validatedData);
                return response()->json(['message' => 'Data inserted successfully']);

            case 'refference_delete':
                js_reference::findOrFail($request->delid)->delete();
                return response()->json(['message' => 'Data deleted successfully']);

            default:
                return response()->json(['message' => 'Invalid action'], 400);
        }
    }

    public function employerlist(): View
    {
        $jobseekerId = auth('jobseeker')->id();
        $blockedEmployerIds = block::where('jobseeker_id', $jobseekerId)->pluck('employer_id')->toArray();
        $companies = empprofile::all();
        $categories = catagory::all();

        return view('jobseeker.companyname', [
            'company' => $companies,
            'array' => $blockedEmployerIds,
            'catagories' => $categories,
        ]);
    }

    public function blockemp(int $employerId): RedirectResponse
    {
        block::firstOrCreate([
            'jobseeker_id' => auth('jobseeker')->id(),
            'employer_id' => $employerId,
        ]);
        return redirect('/jobseeker/blockEmployer');
    }

    public function unblockemp(int $employerId): RedirectResponse
    {
        block::where('jobseeker_id', auth('jobseeker')->id())
            ->where('employer_id', $employerId)
            ->delete();
        return redirect('/jobseeker/blockEmployer');
    }

    public function femployerlist(): View
    {
        $jobseekerId = auth('jobseeker')->id();
        $blockedEmployerIds = block::where('jobseeker_id', $jobseekerId)->pluck('employer_id');
        $followedEmployerIds = follower::where('jobseeker_id', $jobseekerId)->pluck('employer_id')->toArray();
        $companies = empprofile::whereNotIn('employer_id', $blockedEmployerIds)->get();
        $categories = catagory::all();

        return view('jobseeker.followercompanyname', [
            'company' => $companies,
            'array' => $followedEmployerIds,
            'catagories' => $categories,
        ]);
    }

    public function followemp(int $employerId): RedirectResponse
    {
        follower::firstOrCreate([
            'jobseeker_id' => auth('jobseeker')->id(),
            'employer_id' => $employerId,
        ]);
        return redirect('/jobseeker/followEmployer');
    }

    public function unfollowemp(int $employerId): RedirectResponse
    {
        follower::where('jobseeker_id', auth('jobseeker')->id())
            ->where('employer_id', $employerId)
            ->delete();
        return redirect('/jobseeker/followEmployer');
    }

    public function jobseeker_img_upload(Request $request): RedirectResponse
    {
        $request->validate(['profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);

        $jobseekerId = auth('jobseeker')->id();
        $personaldetail = personaldetails::where('jobseeker_id', $jobseekerId)->firstOrFail();
        $image = $request->file('profile_image');
        $imageName = $jobseekerId . '.' . $image->extension();

        if ($personaldetail->profile_img && Storage::exists('public/jobseeker_img/' . $personaldetail->profile_img)) {
            Storage::delete('public/jobseeker_img/' . $personaldetail->profile_img);
        }

        $image->storeAs('public/jobseeker_img', $imageName);
        $personaldetail->profile_img = $imageName;
        $personaldetail->save();

        return back()->with('success', 'Image uploaded successfully.');
    }

    private function validateAcademic(Request $request): array
    {
        return $request->validate([
            'lavelofeducation_id' => 'required|integer|exists:levelofeducations,id',
            'groupormajor_id' => 'nullable|integer|exists:groupoormajors,id',
            'exam_title_id' => 'required|integer|exists:exam_titles,id',
            'result' => 'required|string',
            'marks' => 'nullable|numeric',
            'institute' => 'required|string',
            'passing_year' => 'required|integer',
            'duration' => 'nullable|string',
            'achievment' => 'nullable|string',
        ]);
    }

    private function validateTraining(Request $request): array
    {
        return $request->validate([
            'training_title' => 'required|string|max:255',
            'topic' => 'required|string|max:255',
            'institute' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'year' => 'required|integer',
            'duration' => 'required|string|max:255',
        ]);
    }

    private function validateReference(Request $request): array
    {
        return $request->validate([
            'reference_name' => 'required|string|max:255',
            'disignation' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'address' => 'required|string',
            'office_phone' => 'nullable|string',
            'home_phone' => 'nullable|string',
            'mobile' => 'required|string',
            'email' => 'required|email',
            'relation' => 'required|string',
        ]);
    }
}