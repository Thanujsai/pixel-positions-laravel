<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use Database\Factories\JobFactory;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $jobs = Job::all()->groupBy('featured');//we need different jobs as featured jobs

        return view('jobs.index',[
            'featuredJobs' => $jobs[0],//considering the even indexed jobs as featured jobs
            'jobs' => $jobs[1],//considering the odd indexed jobs as normal jobs
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
