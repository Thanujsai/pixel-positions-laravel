<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use Database\Factories\JobFactory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use App\Models\Employer;
use App\Models\User;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $jobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');//we need different jobs as featured jobs, eager load employer and tags to avoid n+1 problem

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
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'salary' => 'required',
            'schedule' => ['required', Rule::in(['Part Time','Full Time'])],
            'location' => 'required',
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
        ]);

        $attributes['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        // dd($job);
        if($attributes['tags' ?? false]) {
            foreach (explode(',',$attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/')->with('success', 'Job created successfully.');
    }
}
