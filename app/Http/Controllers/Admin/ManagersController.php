<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\ManagersDataTable;
use Illuminate\Http\Request;
use App\Manager;
use Storage;

class ManagersController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Manager';
        $this->folder = 'managers';
        $this->indexTitle = 'اعضاء ومديرين المستشفي';
        $this->createTitle = 'أضافة اعضاء او مديرين للمستشفي';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات اعضاء او مديرين للمستشفي';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(ManagersDataTable $data)
    {
        
        return indexControllers($this->folder,'اعضاء ومديرين المستشفي',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'أضافة اعضاء او مديرين للمستشفي');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'name_ar'                     =>'required',
          'name_en'                     =>'required',
          'job_ar'                      =>'required',
          'job_en'                      =>'required',
          'content_ar'                  =>'required',
          'content_en'                  =>'required',
          'img'                         =>'required',
          'active'                      =>'required',
          
          ],[
          'name_ar.required'           =>trans('admin.name_ar_required'),
          'name_en.required'           =>trans('admin.name_en_required'),
          'active.required'            =>trans('admin.active_required'),
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
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات اعضاء او مديرين للمستشفي');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'name_ar'                     =>'required',
          'name_en'                     =>'required',
          'job_ar'                      =>'required',
          'job_en'                      =>'required',
          'content_ar'                  =>'required',
          'content_en'                  =>'required',
          'img'                       =>'sometimes|nullable|image|mimes:jpg,jpeg,png,gif,bmp',
          'active'                      =>'required',
          
          ],[
          'name_ar.required'           =>trans('admin.name_ar_required'),
          'name_en.required'           =>trans('admin.name_en_required'),
          'active.required'            =>trans('admin.active_required'),
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
      activeAllControllers(request(),'\App\Manager',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
