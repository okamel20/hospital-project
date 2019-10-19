<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\WhychoosesDataTable;
use Illuminate\Http\Request;
use App\Whychoose;
use Storage;
use Carbon;

class WhychoosesController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Whychoose';
        $this->folder = 'whychooses';
        $this->indexTitle = 'التحكم فى لماذا تختار المستشفي';
        $this->createTitle = 'اضافة فى لماذا تختار';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات  فى لماذا تختار';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(WhychoosesDataTable $data)
    {
        
        return indexControllers($this->folder,'التحكم فى لماذا تختار المستشفي',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'اضافة فى لماذا تختار');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'title_ar'                  =>'required',
          'title_en'                  =>'required',
          'content_ar'                =>'required',
          'content_en'                =>'required',
          'active'                    =>'required',
          
          ],[
          'title_ar.required'         =>trans('admin.title_ar_required'),
          'title_en.required'         =>trans('admin.title_en_required'),
          'content_ar.required'       =>trans('admin.content_ar_required'),
          'content_en.required'       =>trans('admin.content_en_required'),
          'active.required'           =>trans('admin.active_required'),
        ]);


        storeControllers($this->model,$data,trans('admin.added'));
        return redirect(adminUrl($this->folder));
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات  فى لماذا تختار');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'title_ar'                  =>'required',
          'title_en'                  =>'required',
          'content_ar'                =>'required',
          'content_en'                =>'required',
          'active'                    =>'required',
          
          ],[
          'title_ar.required'         =>trans('admin.title_ar_required'),
          'title_en.required'         =>trans('admin.title_en_required'),
          'content_ar.required'       =>trans('admin.content_ar_required'),
          'content_en.required'       =>trans('admin.content_en_required'),
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
      activeAllControllers(request(),'\App\Whychoose',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
