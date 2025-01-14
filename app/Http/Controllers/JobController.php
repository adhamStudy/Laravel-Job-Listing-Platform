<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index')->with('jobs', $jobs);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required | max:255 | string',
            'description' => 'required | string'
        ]);
        Job::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description']
        ]);
        return redirect('/jobs');
    }
    public function saved()
    {
        return view('jobs.saved');
    }
    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {

        return view('jobs.show')->with('job', $job);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
// list command to create 4 job listings from php artisan tinker
// $jobs = [
//     ['title' => 'Job 1', 'description' => 'This is job 1'],