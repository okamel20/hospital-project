<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use Storage;
class SettingController extends Controller
{
    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Setting';
        $this->folder = 'setting';
        $this->indexTitle = trans('admin.setting');
        $this->updateTitle = trans('admin.save');
    }

    public function index()
    {
        $data = getSetting();
        return indexSetting($this->folder,trans('admin.setting'),$data);
    }

   
    public function update($id)
    {
        $data = request()->except(['_token','_method']);
        if (request()->hasFile('app_logo')) {
            $data['app_logo'] = updateImg($this->model,$id,'app_logo',$this->folder);
        }

        if (request()->hasFile('about_home_img')) {
            $data['about_home_img'] = updateImg($this->model,$id,'about_home_img',$this->folder);
        }
        updateSetting($this->model,$id,trans('admin.save'),$data);
        return back();
    }

    public function about()
    {
        $data = getSetting();
        return indexSetting('about','التحكم فى وصف الموقع',$data);
    }

    public function aboutUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting($this->model,$id,trans('admin.save'),$data);
        return back();
    }

    public function clinics()
    {
        $data = getClinics();
        return indexSetting('clinics','التحكم فى صفحة العيادات',$data);
    }

    public function clinicsUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        if (request()->hasFile('p1_img')) {
            $data['p1_img'] = updateImg($this->model,$id,'p1_img',$this->folder);
        }
        if (request()->hasFile('p2_img')) {
            $data['p2_img'] = updateImg($this->model,$id,'p2_img',$this->folder);
        }
        if (request()->hasFile('p3_img')) {
            $data['p3_img'] = updateImg($this->model,$id,'p3_img',$this->folder);
        }
        updateSetting('\App\Otherpage',$id,trans('admin.save'),$data);
        return back();
    }

    public function pharmacy()
    {
        $data = getPharmacy();
        return indexSetting('pharmacy','التحكم فى صفحة العيادات',$data);
    }

    public function pharmacyUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        if (request()->hasFile('p1_img')) {
            $data['p1_img'] = updateImg($this->model,$id,'p1_img',$this->folder);
        }
        if (request()->hasFile('p2_img')) {
            $data['p2_img'] = updateImg($this->model,$id,'p2_img',$this->folder);
        }
        if (request()->hasFile('p3_img')) {
            $data['p3_img'] = updateImg($this->model,$id,'p3_img',$this->folder);
        }
        updateSetting('\App\Otherpage',$id,trans('admin.save'),$data);
        return back();
    }

    public function sochialsSections()
    {
        $data = \App\Settings_section::find(1);
        return settingsSections('sochials','اعدادات روابط التواصل الأجتماعى',$data);
    }

    public function sochialsSectionsUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting('\App\Settings_section',$id,trans('admin.save'),$data);
        return back();
    }

    public function newsSections()
    {
        $data = \App\Settings_section::find(2);
        return settingsSections('sochials','اعدادات الأخبار',$data);
    }

    public function newsSectionsUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting('\App\Settings_section',$id,trans('admin.save'),$data);
        return back();
    }

    public function servicesSections()
    {
        $data = \App\Settings_section::find(3);
        return settingsSections('sochials','اعدادات الخدمات',$data);
    }

    public function servicesSectionsUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting('\App\Settings_section',$id,trans('admin.save'),$data);
        return back();
    }

    public function gallerysSections()
    {
        $data = \App\Settings_section::find(4);
        return settingsSections('sochials','اعدادات معرض الخصائص',$data);
    }

    public function gallerysSectionsUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting('\App\Settings_section',$id,trans('admin.save'),$data);
        return back();
    }

    public function managersSections()
    {
        $data = \App\Settings_section::find(5);
        return settingsSections('sochials','اعدادات اعضاء المستشفي',$data);
    }

    public function managersSectionsUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting('\App\Settings_section',$id,trans('admin.save'),$data);
        return back();
    }

    public function whychoosesSections()
    {
        $data = \App\Settings_section::find(6);
        return settingsSections('sochials','اعدادات لماذا تختار؟',$data);
    }

    public function whychoosesSectionsUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting('\App\Settings_section',$id,trans('admin.save'),$data);
        return back();
    }

    public function doctorsSections()
    {
        $data = \App\Settings_section::find(7);
        return settingsSections('sochials','اعدادات الأطباء',$data);
    }

    public function doctorsSectionsUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting('\App\Settings_section',$id,trans('admin.save'),$data);
        return back();
    }

    public function statisticsSections()
    {
        $data = \App\Settings_section::find(8);
        return settingsSections('sochials','اعدادات الأحصائيات',$data);
    }

    public function statisticsSectionsUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting('\App\Settings_section',$id,trans('admin.save'),$data);
        return back();
    }

    public function offersSections()
    {
        $data = \App\Settings_section::find(9);
        return settingsSections('sochials','اعدادات العروض',$data);
    }

    public function offersSectionsUpdate($id)
    {
        $data = request()->except(['_token','_method']);
        updateSetting('\App\Settings_section',$id,trans('admin.save'),$data);
        return back();
    }

    
   
}
