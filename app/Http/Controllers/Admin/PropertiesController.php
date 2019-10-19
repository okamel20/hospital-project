<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\PropertiesDataTable;
use Illuminate\Http\Request;
use App\Section_propertie;
use Storage;

class PropertiesController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Section_propertie';
        $this->folder = 'properties';
        $this->indexTitle = 'التحكم  فى خصائص الأقسام';
        $this->createTitle = 'أضافة خصاص';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات خصاص';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(PropertiesDataTable $data)
    {
        
        return indexControllers($this->folder,'التحكم  فى خصائص الأقسام',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'أضافة خصاص');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'property_name'           =>'required',
          'property_type'           =>'required',
          'serch_active'            =>'required',
          'section_id'              =>'required',
          'property_type'           =>'required',
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
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات خصاص');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'property_name'           =>'required',
          'property_type'           =>'required',
          'serch_active'            =>'required',
          'section_id'              =>'required',
          'property_type'           =>'required',
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
      activeAllControllers(request(),'\App\Section_propertie',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
