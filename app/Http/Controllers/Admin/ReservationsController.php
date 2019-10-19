<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\ReservationsDataTable;
use Illuminate\Http\Request;
use App\Reservation;
use Storage;

class ReservationsController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Reservation';
        $this->folder = 'reservations';
        $this->indexTitle = 'حجوزات الأطباء';
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(ReservationsDataTable $data)
    {
        
        return indexControllers($this->folder,'حجوزات الأطباء',$data);
    }

    public function show($id)
    {
        $data = $this->model::find($id);
        $title = 'عرض تفاصيل الحجز';
        if ($data) {
            return view('admin.reservations.show',compact('data','title'));
        }else{
            return back();
        }
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

}
