<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table = 'managers';
    protected $fillable = [
        'img', 'name_ar', 'name_en', 'job_ar', 'job_en', 'content_ar', 'content_en', 'active'
    ];

    
}
