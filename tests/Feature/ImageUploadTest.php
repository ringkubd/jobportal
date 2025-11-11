<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\empprofile;
use App\Employer;

class ImageUploadTest extends TestCase
{
    public function test_old_image_is_deleted_when_new_one_is_uploaded()
    {
        // 1. Create a fake employer and authenticate
        $employer = factory(Employer::class)->create();
        $this->actingAs($employer, 'employer');

        // 2. Create a fake empprofile associated with the employer
        $empprofile = factory(empprofile::class)->create(['employer_id' => $employer->id]);

        // 3. Fake a storage disk
        Storage::fake('public');

        // 4. Upload the first image
        $firstImage = UploadedFile::fake()->image('first.jpg');
        $this->post(route('employer.updateImage'), [
            'image' => $firstImage,
        ]);

        // 5. Get the first image name from the database
        $firstImageName = $empprofile->fresh()->companylogo;
        Storage::disk('public')->assertExists('company_logo/' . $firstImageName);

        // 6. Upload the second image
        $secondImage = UploadedFile::fake()->image('second.jpg');
        $this->post(route('employer.updateImage'), [
            'image' => $secondImage,
        ]);

        // 7. Get the second image name from the database
        $secondImageName = $empprofile->fresh()->companylogo;
        Storage::disk('public')->assertExists('company_logo/' . $secondImageName);

        // 8. Assert the first image was deleted
        Storage::disk('public')->assertMissing('company_logo/' . $firstImageName);
    }
}