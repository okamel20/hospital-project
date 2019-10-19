<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'title_ar', 'title_en', 'desc_ar', 'desc_en', 'img', 'active'
    ];

    
}
