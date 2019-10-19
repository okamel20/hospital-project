<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_section extends Model
{
    protected $table = 'settings_sections';
    protected $fillable = [
        'show_home', 'title_ar', 'desc_ar', 'title_en', 'desc_en', 'active'
    ];

    
}
