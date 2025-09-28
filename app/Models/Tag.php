<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->belongsToMany(
            \App\Models\Job::class,
            'job_listing_tag',   // pivot table
            'tag_id',            // foreign key on pivot for Tag
            'job_listing_id'     // foreign key on pivot for Job
        );
    }
}
