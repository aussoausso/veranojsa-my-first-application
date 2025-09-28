<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Employer;
use App\Models\Tag;
use Illuminate\Http\Request;

Route::get('/', fn() => view('welcome'));

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::with(['employer', 'tags'])->paginate(10)
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs-create', [
        'employers' => Employer::all(),
        'tags' => Tag::all()
    ]);
});

Route::post('/jobs', function (Request $request) {
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'salary' => 'required|string|max:255',
        'employer_id' => 'required|exists:employers,id',
        'tags' => 'array'
    ]);

    $job = Job::create([
        'title' => $validated['title'],
        'salary' => $validated['salary'],
        'employer_id' => $validated['employer_id'],
    ]);

    if (!empty($validated['tags'])) {
        $job->tags()->attach($validated['tags']);
    }

    return redirect('/jobs');
});
    