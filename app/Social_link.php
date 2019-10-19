<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social_link extends Model
{
    protected $table = 'social_links';
    protected $fillable = [
        'icon', 'link', 'active'
    ];
}
