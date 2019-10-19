<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\StatisticsDataTable;
use Illuminate\Http\Request;
use App\Statistic;
use Storage;

class StatisticsController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Statistic';
        $this->folder = 'statistics';
        $this->indexTitle = 'التحكم فى الأحصائيات';
        $this->createTitle = 'أضافة احصائية';
        $this->storeTitle = trans('admin.added');
        $this->editTitle = 'تعديل بيانات احصائية';
        $this->updateTitle = trans('admin.edited');
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(StatisticsDataTable $data)
    {
        
        return indexControllers($this->folder,'التتحكم فى الأحصائيات',$data);
    }

   
    public function create()
    {
        return createControllers($this->folder,'أضافة احصائية');
    }

    
    public function store()
    {
        $data = $this->validate(request(),[
          'name_ar'                =>'required',
          'name_en'                =>'required',
          'count_num'              =>'required',
          'img'                    =>'required|image|mimes:jpg,jpeg,png,gif,bmp',
          'active'                 =>'required',
          
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
        return editControllers($this->model,$id,$this->folder,'تعديل بيانات احصائية');

    }

    
    public function update($id)
    {
        $data = $this->validate(request(),[
          'name_ar'                 =>'required',
          'name_en'                 =>'required',
          'count_num'               =>'required',
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
      activeAllControllers(request(),'\App\Statistic',trans('admin.edited'));
      return redirect(adminUrl($this->folder));
    }
}
