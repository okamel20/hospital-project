<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    protected $fillable = [
        'title_ar', 'title_en', 'desc_ar', 'desc_en', 'content_ar', 'content_en', 'type', 'active'
    ];

    public function contents()
    {
        return $this->hasMany('App\Page_content','page_id','id');
    }

    protected static function boot() {
        parent::boot();
        static::deleting(function($year) {
            $year->contents()->delete();
        });
    }

    
}
