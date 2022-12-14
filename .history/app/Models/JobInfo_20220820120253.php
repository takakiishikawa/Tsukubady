<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobInfo extends Model
{
    use HasFactory;

    protected $fillable=[
        'job_type',
        'position',
        'job_description',
    ];
}
