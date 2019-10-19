<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\GallerysDataTable;
use Illuminate\Http\Request;
use App\Gallery;
use Storage;

class GallerysController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Gallery';
        $this->folder = 'gallerys';
        $this->indexTitle = 'التحكم فى معرض الخصائص';
        $this->createTitle = 'أضافة صورة فى المعرض';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات  صورة فى المعرض';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(GallerysDataTable $data)
    {
        
        return indexControllers($this->folder,'التحكم فى معرض الخصائص',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'أضافة صورة فى المعرض');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'img'                       =>'required',
          'active'                    =>'required',
          ],[
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
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات  صورة فى المعرض');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'active'                    =>'required',
          'img'                       =>'sometimes|nullable|image|mimes:jpg,jpeg,png,gif,bmp',
          ],[
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
      activeAllControllers(request(),'\App\Gallery',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
