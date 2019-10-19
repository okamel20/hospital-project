<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otherpage extends Model
{
    protected $table = 'otherpages';
    protected $fillable = [
       'title_ar', 'title_en', 'desc_ar', 'desc_en', 'p1_title_ar', 'p1_title_en', 'p1_content_ar', 'p1_content_en', 'p1_img', 'p2_title_ar', 'p2_title_en', 'p2_content_ar', 'p2_content_en', 'p2_img', 'p3_title_ar', 'p3_title_en', 'p3_content_ar', 'p3_content_en', 'p32_img', 'active'
    ];
}
