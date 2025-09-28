<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    // Show the jobs list on homepage instead of the default welcome page
    return view('home', [
        'jobs' => Job::with(['employer', 'tags'])->paginate(10)
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        // Eager load employer + tags and paginate 10 per page
        'jobs' => Job::with(['employer', 'tags'])->paginate(10)
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::with(['employer', 'tags'])->findOrFail($id)
    ]);
});
