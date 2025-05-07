<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke()
    {
        //dd(request('q'));//q is from the forms

        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower(request('q')) . '%'])
            ->get();

        // dd($jobs);
        return view('results',['jobs' => $jobs]);
    }
}
