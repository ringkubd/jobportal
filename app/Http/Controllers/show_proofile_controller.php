<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\empprofile;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class show_proofile_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('employer');
    }

    public function showdata(): View
    {
        $employerId = auth('employer')->id();

        $empdes = empprofile::query()
            ->join('countries', 'empprofiles.country', '=', 'countries.id')
            ->join('divisions', 'empprofiles.division', '=', 'divisions.id')
            ->join('districts', 'empprofiles.district', '=', 'districts.id')
            ->join('areas', 'empprofiles.area', '=', 'areas.id')
            ->select(
                'empprofiles.*',
                'countries.name as cname',
                'divisions.name as dname',
                'districts.name as disname',
                'areas.name as aname'
            )
            ->where('empprofiles.employer_id', $employerId)
            ->firstOrFail();

        return view('employer.resume', compact('empdes'));
    }

    public function getimage(Request $request): JsonResponse
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $employerId = auth('employer')->id();
        $empprofile = empprofile::where('employer_id', $employerId)->firstOrFail();
        $newImage = $request->file('image');
        $uniqueImageName = Str::uuid() . '.' . $newImage->extension();

        if ($empprofile->companylogo) {
            Storage::delete('public/company_logo/' . $empprofile->companylogo);
        }

        $newImage->storeAs('public/company_logo', $uniqueImageName);
        $empprofile->companylogo = $uniqueImageName;
        $empprofile->save();

        return response()->json(['message' => 'Image uploaded successfully.']);
    }
}