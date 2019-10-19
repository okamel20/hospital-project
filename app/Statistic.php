<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $table = 'statistics';
    protected $fillable = [
       'name_ar', 'name_en', 'img', 'count_num', 'active'
    ];

    
}
