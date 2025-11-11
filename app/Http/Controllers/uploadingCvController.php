<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\cv;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;

class uploadingCvController extends Controller
{
    public function __construct()
    {
        $this->middleware('jobseeker');
    }

    public function uploadingPage(): View
    {
        $jobseekerId = auth('jobseeker')->id();
        $cv = cv::where('jobseeker_id', $jobseekerId)->first();
        return view('jobseeker.uploadingCv', compact('cv'));
    }

    public function cvUpload(Request $request): Response
    {
        $request->validate([
            'inputCv' => 'required|file|mimes:doc,pdf|max:500',
        ]);

        $jobseekerId = auth('jobseeker')->id();
        $file = $request->file('inputCv');
        $extension = $file->extension();
        $uniqueName = $jobseekerId . '.' . $extension;

        $file->storeAs('public/cv', $uniqueName);

        cv::updateOrCreate(
            ['jobseeker_id' => $jobseekerId],
            ['cv_name' => $uniqueName]
        );

        return response('Cv upload Succesfully');
    }

    public function showuploadedcv(): Response
    {
        $jobseekerId = auth('jobseeker')->id();
        $cv = cv::where('jobseeker_id', $jobseekerId)->firstOrFail();
        $filePath = storage_path('app/public/cv/' . $cv->cv_name);

        if (!File::exists($filePath)) {
            abort(404);
        }

        $fileContents = File::get($filePath);
        $mimeType = File::mimeType($filePath);

        return new Response($fileContents, 200, ['Content-Type' => $mimeType]);
    }

    public function createDoc(): void
    {
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
        $section->addText('ABCD');

        $section = $phpWord->addSection();
        $section->addText('<h2><abcd>HAHAHAHAHA</abcd></h2>');

        $objWriter = IOFactory::createWriter($phpWord, 'HTML');
        $objWriter->save('abcd.html');
    }
}