<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Whychoose extends Model
{
    protected $table = 'whychooses';
    protected $fillable = [
         'icon', 'title_ar', 'title_en', 'content_ar', 'content_en', 'active'
    ];

    
}
