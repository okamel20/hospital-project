<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\DoctorsDataTable;
use Illuminate\Http\Request;
use App\Doctor;
use Storage;

class DoctorsController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Doctor';
        $this->folder = 'doctors';
        $this->indexTitle = 'الأطباء';
        $this->createTitle = 'أضافة طبيب';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات  طبيب';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(DoctorsDataTable $data)
    {
        
        return indexControllers($this->folder,'الأطباء',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'أضافة طبيب');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'section_id'                =>'required',
          'name_ar'                   =>'required',
          'name_en'                   =>'required',
          'job_ar'                    =>'required',
          'job_en'                    =>'required',
          'desc_ar'                   =>'required',
          'desc_en'                   =>'required',
          'phone'                     =>'required',
          'email'                     =>'required',
          'img'                       =>'required',
          'active'                    =>'required',
          
          ],[
          'section_id.required'       =>trans('admin.author_id_required'),
          'month_name_ar.required'    =>trans('admin.month_name_ar_required'),
          'month_name_en.required'    =>trans('admin.month_name_en_required'),
          'year.required'             =>trans('admin.year_required'),
          'name_ar.required'          =>trans('admin.name_ar_required'),
          'name_en.required'          =>trans('admin.name_en_required'),
          'desc_ar.required'          =>trans('admin.desc_ar_required'),
          'desc_en.required'          =>trans('admin.desc_en_required'),
          'img.required'              =>trans('admin.img_required'),
          'active.required'           =>trans('admin.active_required'),
        ]);

        if (request()->hasFile('img')) {
            $data['img'] = request()->file('img')->store($this->folder);
        }

        storeControllers($this->model,$data,trans('admin.added'));
        return redirect(adminUrl($this->folder));
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات  طبيب');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'section_id'                =>'required',
          'name_ar'                   =>'required',
          'name_en'                   =>'required',
          'job_ar'                    =>'required',
          'job_en'                    =>'required',
          'desc_ar'                   =>'required',
          'desc_en'                   =>'required',
          'phone'                     =>'required',
          'email'                     =>'required',
          'active'                    =>'required',
          'img'                       =>'sometimes|nullable|image|mimes:jpg,jpeg,png,gif,bmp',
          
          ],[
          'author_id.required'        =>trans('admin.author_id_required'),
          'month_name_ar.required'    =>trans('admin.month_name_ar_required'),
          'month_name_en.required'    =>trans('admin.month_name_en_required'),
          'year.required'             =>trans('admin.year_required'),
          'title_ar.required'         =>trans('admin.title_ar_required'),
          'title_en.required'         =>trans('admin.title_en_required'),
          'content_ar.required'       =>trans('admin.content_ar_required'),
          'content_en.required'       =>trans('admin.content_en_required'),
          'img.required'              =>trans('admin.img_required'),
          'active.required'           =>trans('admin.active_required'),
        ]);

        if (request()->hasFile('img')) {
            $data['img'] = updateImg($this->model,$id,'img',$this->folder);
        }

        updateControllers($this->model,$id,$data,trans('admin.edited'));
        return redirect(adminUrl($this->folder));

    }

    
    public function destroy($id)
    {
      return deleteControllers($this->model,$id);
    }

    public function deleteAll()
    {
      deleteAllControllers(request(),$this->model,trans('admin.deleted'));
      return redirect(adminUrl($this->folder));

    }

    public function activeAll()
    {
      activeAllControllers(request(),'\App\Doctor',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
