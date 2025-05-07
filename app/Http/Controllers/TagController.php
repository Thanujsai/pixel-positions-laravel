<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)//since in the route we have a wildcard called tag, that tag is saved in $tag variable
    {

        // dd($tag->jobs);
        //returning all the jobs associated with the passes tag
        return view('results',['jobs' => $tag->jobs]);
    }
}
