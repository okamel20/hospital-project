<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\PagesDataTable;
use Illuminate\Http\Request;
use App\Page;
use Storage;
use Carbon;

class PagesController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Page';
        $this->folder = 'pages';
        $this->indexTitle = 'الصفحات';
        $this->createTitle = 'أضافة   صفحة';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات   صفحة';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(PagesDataTable $data)
    {
      return indexControllers($this->folder,'الصفحات',$data);
    }

   
    public function create()
    {
      return createControllers($this->folder,'أضافة   صفحة');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'title_ar'                  =>'required',
          'title_en'                  =>'required',
          'desc_ar'                  =>'required',
          'desc_en'                  =>'required',
          'content_ar'                  =>'required',
          'content_en'                  =>'required',
          'type'                      =>'required',
          ],[
          'active.required'           =>trans('admin.active_required'),
        ]);

        storeControllers($this->model,$data,trans('admin.added'));
        return redirect(adminUrl($this->folder));
    }

    
    

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات   صفحة');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'title_ar'                  =>'required',
          'title_en'                  =>'required',
          'desc_ar'                  =>'required',
          'desc_en'                  =>'required',
          'content_ar'                  =>'required',
          'content_en'                  =>'required',
          'type'                      =>'required',
          ],[
          'active.required'           =>trans('admin.active_required'),
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
      activeAllControllers(request(),'\App\Page',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
