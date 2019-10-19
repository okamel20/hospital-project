<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\OffersDataTable;
use Illuminate\Http\Request;
use App\Offer;
use Storage;

class OffersController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Offer';
        $this->folder = 'offers';
        $this->indexTitle = 'التحكم فى العروض التجارية';
        $this->createTitle = 'أضافة اعلان عرض';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات اعلان عرض';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(OffersDataTable $data)
    {
        
        return indexControllers($this->folder,'التحكم فى العروض التجارية',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'أضافة اعلان عرض');
    }

    
    public function store()
    {

      $data = $this->validate(request(),[
        'title_ar'                =>'required',
        'title_en'                =>'required',
        'desc_ar'                 =>'required',
        'desc_en'                 =>'required',
        'sale'                    =>'required',
        'img'                     =>'required',
        'active'                  =>'required',
        
        ],[
        'icon.required'           =>trans('admin.icon_required'),
        'link.required'           =>trans('admin.link_required'),
        'active.required'         =>trans('admin.active_required'),
      ]);

      if (request()->hasFile('img')) {
            $data['img'] = request()->file('img')->store('commercials');
        }

      storeControllers($this->model,$data,trans('admin.added'));
      return redirect(adminUrl($this->folder));
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات اعلان عرض');

    }

    
    public function update($id)
    {

      $data = $this->validate(request(),[
        'title_ar'                =>'required',
        'title_en'                =>'required',
        'desc_ar'                 =>'required',
        'desc_en'                 =>'required',
        'sale'                    =>'required',
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
      activeAllControllers(request(),'\App\Offer',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
