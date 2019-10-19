<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = [
       'app_name_en', 'app_name_ar', 'app_logo', 'about_home_text_ar', 'about_home_text_en', 'about_home_img', 'email', 'phone', 'address_en', 'address_ar', 'app_android', 'app_ios', 'about_title_ar', 'about_title_en', 'about_desc_ar', 'about_desc_en', 'about_p1_ar', 'about_p1_en', 'about_p2_ar', 'about_p2_en', 'about_p3_ar', 'about_p3_en', 'section_about_show_home', 'section_sochial_show_home', 'section_properties_show_home','copy_rights_ar','copy_rights_en'
    ];
}
