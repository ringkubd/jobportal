<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\empprofile;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class employerController extends Controller
{
    public function __construct()
    {
        $this->middleware('employer');
    }

    public function index(): View
    {
        return view('employer.resume');
    }

    public function show($id): View
    {
        $employerId = auth('employer')->id();

        $empdes = empprofile::query()
            ->with(['country', 'division', 'district', 'area'])
            ->where('employer_id', $employerId)
            ->firstOrFail();

        $industrytype = isset($empdes->industrytype) ? explode(',', $empdes->industrytype) : null;

        return view('employer.resume', compact('empdes', 'industrytype'));
    }

    public function update(Request $request, $id): JsonResponse
    {
        $empprofile = empprofile::where('employer_id', $id)->firstOrFail();

        switch ($request->action) {
            case 'companyinfo':
                $validatedData = $request->validate([
                    'companyname' => ['required', 'string', 'max:255'],
                    'altcompanyname' => ['nullable', 'string', 'max:255'],
                    'contactperson' => ['required', 'string', 'max:255'],
                    'designation' => ['required', 'string', 'max:255'],
                ]);
                $empprofile->update($validatedData);
                break;

            case 'industrytype':
                $validatedData = $request->validate([
                    'industrytype' => ['required', 'array'],
                ]);
                $empprofile->industrytype = implode(',', $validatedData['industrytype']);
                $empprofile->save();
                break;

            case 'primaryaddress':
                $validatedData = $request->validate([
                    'Companyaddress' => ['required', 'string', 'max:255'],
                    'country' => ['required', 'integer'],
                    'division' => ['required', 'integer'],
                    'district' => ['required', 'integer'],
                    'area' => ['required', 'integer'],
                    'BillingAddress' => ['required', 'string', 'max:255'],
                    'ContactPhone' => ['required', 'string', 'max:255'],
                    'ContactEmail' => ['required', 'email', 'max:255'],
                    'WebsiteAddress' => ['nullable', 'url', 'max:255'],
                ]);
                $empprofile->update($validatedData);
                break;

            default:
                return response()->json(['message' => 'Invalid action.'], 400);
        }

        return response()->json(['message' => 'Profile updated successfully.']);
    }
}