<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';
    protected $fillable = [
        'sale', 'title_ar', 'title_en', 'desc_ar', 'desc_en', 'img', 'active'
    ];
}
