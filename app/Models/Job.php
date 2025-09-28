<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Use job_listings table instead of default "jobs"
    protected $table = 'job_listings';

    /**
     * A Job belongs to one Employer
     */
    public function employer()
    {
        return $this->belongsTo(\App\Models\Employer::class);
    }

    /**
     * A Job has many Tags (Many-to-Many)
     */
    public function tags()
    {
        return $this->belongsToMany(
            \App\Models\Tag::class,
            'job_listing_tag',   // Pivot table
            'job_listing_id',    // Foreign key for Job
            'tag_id'             // Foreign key for Tag
        );
    }
}
