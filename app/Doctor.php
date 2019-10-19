<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';
    protected $fillable = [
        'img', 'name_ar', 'name_en', 'job_ar', 'job_en', 'desc_ar', 'desc_en', 'phone', 'email', 'section_id', 'active'
    ];

    public function reservations()
    {
        return $this->hasMany('App\Reservation','doctor_id','id');
    }

    protected static function boot() {
        parent::boot();
        static::deleting(function($year) {
            $year->reservations()->delete();
        });
    }

    
}
