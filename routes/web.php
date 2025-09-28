<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs', [
        // Eager load employer + tags and paginate 10 per page
        'jobs' => Job::with(['employer', 'tags'])->paginate(10)
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::find($id)
    ]);
});