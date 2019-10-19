<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\AdPropertiesDataTable;
use Illuminate\Http\Request;
use App\Ad_propertie;
use Storage;

class AdPropertiesController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Ad_propertie';
        $this->folder = 'properties';
        $this->indexTitle = 'التحكم فى المميزات';
        $this->createTitle = 'أضافة ميزه';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات ميزه';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(AdPropertiesDataTable $data)
    {
        
        return indexControllers($this->folder,'التتحكم فى المميزات',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'أضافة ميزه');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'title_ar'                =>'required',
          'title_en'                =>'required',
          'desc_ar'                 =>'required',
          'desc_en'                 =>'required',
          'img'                     =>'required|image|mimes:jpg,jpeg,png,gif,bmp',
          'active'                  =>'required',
          
          ],[
          'icon.required'           =>trans('admin.icon_required'),
          'link.required'           =>trans('admin.link_required'),
          'active.required'         =>trans('admin.active_required'),
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
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات ميزه');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'title_ar'                =>'required',
          'title_en'                =>'required',
          'desc_ar'                 =>'required',
          'desc_en'                 =>'required',
          'img'                     =>'sometimes|nullable|image|mimes:jpg,jpeg,png,gif,bmp',
          'active'                  =>'required',
          
          ],[
          'icon.required'           =>trans('admin.icon_required'),
          'link.required'           =>trans('admin.link_required'),
          'active.required'         =>trans('admin.active_required'),
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
      activeAllControllers(request(),'\App\Ad_propertie',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
