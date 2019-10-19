<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad_propertie extends Model
{
    protected $table = 'ad_properties';
    protected $fillable = [
        'title_ar', 'title_en', 'img', 'desc_ar', 'desc_en', 'active'
    ];
}
