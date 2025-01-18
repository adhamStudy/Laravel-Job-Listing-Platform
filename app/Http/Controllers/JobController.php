<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

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
            'description' => 'required | string',
            'salary' => 'required | integer',
            'requirements' => 'required | string',
            'tags' => 'nullable | string',
            'job_type' => 'required | string',
            'remote' => 'required | boolean',
            'city' => 'required | string',
            'state' => 'required | string',
            'company_name' => 'required | string',
            'contact_email' => 'required | email',
            'company_website' => 'required | string',
            'company_description' => 'nullable | string',
            'benefits' => 'nullable | string',
            'address' => 'nullable | string',
            'zipcode' => 'nullable | string',
            'contact_phone' => 'nullable | string',
            'company_logo' => 'nullable | mimes:jpeg,png,jpg max:2048'
        ]);

        // Hardcoded User ID
        $validatedData['user_id'] = 1;

        // check for image
        if ($request->hasFile('company_logo')) {
            $path = $request->file('company_logo')->store('logos', 'public');

            // Add path to validated database
            $validatedData['company_logo'] = $path;
        }


        // Submit to database
        Job::create($validatedData);
        return redirect('/jobs')->with('success', 'Job listing created successfully');
    }
    public function saved(): View
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
    public function edit(Job $job): View
    {
        return view('jobs.edit')->with('job', $job);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {

        $validatedData = $request->validate([
            'title' => 'required | max:255 | string',
            'description' => 'required | string',
            'salary' => 'required | integer',
            'requirements' => 'required | string',
            'tags' => 'nullable | string',
            'job_type' => 'required | string',
            'remote' => 'required | boolean',
            'city' => 'required | string',
            'state' => 'required | string',
            'company_name' => 'required | string',
            'contact_email' => 'required | email',
            'company_website' => 'required | string',
            'company_description' => 'nullable | string',
            'benefits' => 'nullable | string',
            'address' => 'nullable | string',
            'zipcode' => 'nullable | string',
            'contact_phone' => 'nullable | string',
            'company_logo' => 'nullable | mimes:jpeg,png,jpg max:2048'
        ]);


        // check for image
        if ($request->hasFile('company_logo')) {
            // Delete Old Logo
            Storage::delete('public/logos/' . basename($job->company_logo));



            $path = $request->file('company_logo')->store('logos', 'public');

            // Add path to validated database
            $validatedData['company_logo'] = $path;
        }


        // Submit to database
        $job->update($validatedData);
        return redirect('/jobs')->with('success', 'Job listing updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job): RedirectResponse
    {
        if ($job->company_logo) {
            Storage::delete('public/logos/' . $job->company_logo);
        }
        $job->delete();
        return redirect('/jobs')->with('success', 'Job listing deleted successfully');
    }
}
