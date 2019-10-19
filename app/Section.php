<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';
    protected $fillable = [
        'name_ar', 'name_en', 'active'
    ];

    public function doctors()
    {
        return $this->hasMany('App\Doctor','section_id','id');
    }

    protected static function boot() {
        parent::boot();
        static::deleting(function($year) {
            $year->doctors()->delete();
        });
    }

    
}
