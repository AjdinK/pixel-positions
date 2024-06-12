<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::latest()->get()->groupBy('featured');

        return view(
            'jobs.index',
            [
                'featuredJobs' => $jobs[1],
                'jobs' => Job::latest()->get(),
                'tags' => Tag::all(),
            ]
        );
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'salary' => 'required',
            'location' => 'required',
            'schedule' => ['required', Rule::in(['Part Time', 'Full Time'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],

        ]);

        $attributes['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');
    }

    public function create()
    {
        return view('jobs.create');

    }

    //    public function show(Job $job)
    //    {
    //        return view('jobs.show',
    //            [
    //                'job' => $job,
    //            ]);
    //    }
}
