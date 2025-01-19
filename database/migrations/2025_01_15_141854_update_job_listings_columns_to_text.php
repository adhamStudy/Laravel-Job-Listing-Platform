<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateJobListingsColumnsToText extends Migration
{
    public function up()
    {
        Schema::table('job_listings', function (Blueprint $table) {
            $table->text('requirements')->change(); // Change to text
            $table->text('benefits')->change(); // Change to text
            $table->text('company_description')->change(); // Change to text
        });
    }

    public function down()
    {
        Schema::table('job_listings', function (Blueprint $table) {
            $table->string('requirements')->change(); // Revert to string
            $table->string('benefits')->change(); // Revert to string
            $table->string('company_description')->change(); // Revert to string
        });
    }
}
