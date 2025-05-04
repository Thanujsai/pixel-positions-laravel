<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase
{
    use RefreshDatabase; // ✅ This runs migrations before each test

    /**
     * A basic unit test example.
     */
    public function test_BelongsToAnEmployer(): void
    {
        //arrange
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        // Act & Assert
        $this->assertTrue($job->employer->is($employer));
        
    }

    public function test_ItCanHaveTags(): void
    {
        //arrange
        $job = Job::factory()->create();

        // Act
        $job->tag('Frontend');

        //Assert
        expect($job->tags)->toHaveCount(1);
        
    }
}
