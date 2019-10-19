<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\OrdersDataTable;
use Illuminate\Http\Request;
use App\Order;
use Storage;
use Carbon;

class OrdersController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
        $this->model = 'App\Order';
        $this->folder = 'orders';
        $this->indexTitle = 'طلبات تحديد موعد';
        $this->deletedTitle = trans('admin.deleted');
    }
    
    public function index(OrdersDataTable $data)
    {
        
        return indexControllers($this->folder,'طلبات تحديد موعد',$data);
    }

    public function show($id)
    {
        $data = $this->model::find($id);
        $title = 'عرض  طلب الحجز';
        if ($data) {
            return view('admin.orders.show',compact('data','title'));
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
