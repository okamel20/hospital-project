<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\SochialsDataTable;
use Illuminate\Http\Request;
use App\Social_link;
use Storage;

class SochialsController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Social_link';
        $this->folder = 'sochials';
        $this->indexTitle = 'التحكم  فى روابط التواصل الأجتماعى';
        $this->createTitle = 'أضافة رابط';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات رابط';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(SochialsDataTable $data)
    {
        
        return indexControllers($this->folder,'التحكم  فى روابط التواصل الأجتماعى',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'أضافة رابط');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'icon'                    =>'required',
          'link'                    =>'required',
          'active'                  =>'required',
          
          ],[
          'icon.required'           =>trans('admin.icon_required'),
          'link.required'           =>trans('admin.link_required'),
          'active.required'         =>trans('admin.active_required'),
        ]);

        storeControllers($this->model,$data,trans('admin.added'));
        return redirect(adminUrl($this->folder));
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات رابط');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'link'                    =>'required',
          'active'                  =>'required',
          
          ],[
          'icon.required'           =>trans('admin.icon_required'),
          'link.required'           =>trans('admin.link_required'),
          'active.required'         =>trans('admin.active_required'),
        ]);

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
      activeAllControllers(request(),'\App\Social_link',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
