<?php
namespace App\Http\Controllers;
use Auth;
use Mail;
use Storage;
class HomeController extends Controller
{

    public function __construct() {
        $this->setting = \App\Setting::find(1);
    }

	public function indexHome()
    {
    	$title = trans('admin.Home');
        return view('homepage',compact('title'));
    }

    public function page($id)
    {
    	$page = \App\Page::find($id);
    	if ($page) {
    		$title = $page['title_'.lang()];
    		return view('page',compact('title','page'));
    	}else{
    		return back();
    	}
    	
    }

    public function contact()
    {
        $title = trans('admin.contact');
        return view('contact',compact('title'));
    }

    public function postContact()
    {
        $add = new \App\Contact;
        $add->name = request('name');
        $add->contact_subject_id = request('contact_subject_id');
        $add->email = request('email');
        $add->phone = request('phone');
        $add->msg = request('msg');

        $add->save();
        session()->flash('save', trans('admin.sendmsgcontact'));
        return back();
    }

    public function doctors()
    {
        $title = sectionSetting(7)['title_'.lang()].' '.trans('admin.our_doctors');
        $description = sectionSetting(7)['desc_'.lang()];
        return view('doctors',compact('title','description'));
    }

    public function doctor($id)
    {
        $data = \App\Doctor::find($id);
        $title = $data['name_'.lang()];
        return view('doctor',compact('title','data'));
    }

    public function bookAppointment($id)
    {
        $add = new \App\Reservation;
        $add->name = request('name');
        $add->doctor_id = $id;
        $add->email = request('email');
        $add->phone = request('phone');
        $add->save();
        session()->flash('save', trans('admin.sendmsgcontact'));
        return back();
    }

    public function blog()
    {
        $title = sectionSetting(2)['title_'.lang()].' '.trans('admin.our_doctors');
        $description = sectionSetting(2)['desc_'.lang()];
        return view('blog',compact('title','description'));
    }

    public function blogId($id)
    {
        $data = \App\News::find($id);
        $title = $data['title_'.lang()];
        return view('blogId',compact('title','data'));
    }

    public function services()
    {
        $title = sectionSetting(3)['title_'.lang()];
        $description = sectionSetting(3)['desc_'.lang()];
        return view('services',compact('title','description'));
    }

    public function clinics()
    {
        $data = \App\Otherpage::find(1);
        $title = $data['title_'.lang()];
        $description = $data['desc_'.lang()];
        return view('clinics',compact('title','description','data'));
    }

    public function pharmacy()
    {
        $data = \App\Otherpage::find(2);
        $title = $data['title_'.lang()];
        $description = $data['desc_'.lang()];
        return view('pharmacy',compact('title','description','data'));
    }

    public function offers()
    {
        $title = sectionSetting(9)['title_'.lang()];
        $description = sectionSetting(9)['desc_'.lang()];
        return view('offers',compact('title','description'));
    }

    public function orders()
    {
        $add = new \App\Order;
        $add->name = request('name');
        $add->email = request('email');
        $add->phone = request('phone');
        $add->msg   = request('msg');
        $add->save();
        session()->flash('save', trans('admin.sendmsgcontact'));
        return back();
    }

    

}
