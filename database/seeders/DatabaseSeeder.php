<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Truncate Tables
        DB::table('job_listings')->truncate();
        Db::table('users')->truncate();

        $this->call(TestUserSeeder::class);
        $this->call(RandomUserSeeder::class);
        $this->call(JobSeeder::class);
    }
}
