<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load Job Listings from the file
        $filePath = database_path('seeders/data/job_listings.php');

        // Get test user ID



        if (!file_exists($filePath)) {
            echo "Error: File not found at $filePath\n";
            return;
        }

        $jobListings = include($filePath);

        if (empty($jobListings)) {
            echo "Error: No job listings found in the file.\n";
            return;
        }
        $testUserId = User::where('email', 'test@test.com')->value('id');

        // Get all other users from user Model
        $userIds = User::where('email', '!=', 'test@test.com')->pluck('id')->toArray();

        if (empty($userIds)) {
            echo "No users found. Please create users first.\n";
            return;
        }

        // Prepare the data for insertion
        $data = [];
        foreach ($jobListings as $index => &$listing) {
            if ($index < 2) {
                // Assign first two listings to the test user
                $listing['user_id'] = $testUserId;
            }
            // Assign a random user_id
            else {
                $listing['user_id'] = $userIds[array_rand($userIds)];
            }

            // Add timestamps
            $listing['created_at'] = now();
            $listing['updated_at'] = now();

            // Add the modified listing to the data array
            $data[] = $listing;
        }

        // Insert the data into the job_listings table
        DB::table('job_listings')->insert($data);

        echo 'Jobs Created Successfully';
    }
}
