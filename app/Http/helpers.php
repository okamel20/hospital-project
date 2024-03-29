<?php

if (!function_exists('sectionSetting')) {
     function sectionSetting($id){
          return \App\Settings_section::find($id);
     }
}

if (!function_exists('add')) {
     function add($url){
          return redirect($url);
     }
}

if (!function_exists('adminUrl')) {
     function adminUrl($url = null){
          return url('admin/'.$url);
     }
}


if (!function_exists('admin')) {
     function admin(){
          return auth()->guard('admin');
     }
}

if (!function_exists('logo')) {
     function logo(){
          return Storage::url(setting()['app_logo']);
     }
}



if (!function_exists('lang')) {
     function lang(){
          if (session()->has('lang')) {
               return session('lang');
          }else{
               return 'ar';
          }
     }
}

if (!function_exists('country')) {
     function country(){
          if (session()->has('country')) {
               return session('country');
          }else{
               return 1;
          }
     }
}

if (!function_exists('direction')) {
     function direction(){
          if (session()->has('lang')) {
               if( session('lang') == 'ar'){
                    return 'rtl';
               }else{
                    return 'ltr';
               }
          }else{
               return 'rtl';
          }
     }
}

if (!function_exists('directionName')) {
     function directionName(){
          if (session()->has('lang')) {
               if( session('lang') == 'ar'){
                    return 'left';
               }else{
                    return 'right';
               }
          }else{
               return 'right';
          }
     }
}

if (!function_exists('datatableLang')) {
     function datatableLang(){
          return ['sProcessing' => trans('admin.sProcessing'),
            'sLengthMenu' => trans('admin.sLengthMenu'),
            'sZeroRecords' => trans('admin.sZeroRecords'),
            'sEmptyTable' => trans('admin.sEmptyTable'),
            'sInfo' => trans('admin.sInfo'),
            'sInfoEmpty' => trans('admin.sInfoEmpty'),
            'sInfoFiltered' => trans('admin.sInfoFiltered'),
            'sInfoPostFix' => trans('admin.sInfoPostFix'),
            'sSearch' => trans('admin.sSearch'),
            'sUrl' => trans('admin.sUrl'),
            'sInfoThousands' => trans('admin.sInfoThousands'),
            'sLoadingRecords' => trans('admin.sLoadingRecords'),

            'oPaginate' => [
                'sFirst' => trans('admin.sFirst'),
                'sLast' => trans('admin.sLast'),
                'sNext' => trans('admin.sNext'),
                'sPrevious' => trans('admin.sPrevious'),
            ],
            
            'oAria' => [
                 'sSortAscending' => trans('admin.sSortAscending'),
                'sSortDescending' => trans('admin.sSortDescending'),
            ]];
     }
}

if (!function_exists('oldOrValue')) {
     function oldOrValue($inputName,$data){
          if (old($inputName)) {
               return old($inputName);
          }else{
               return $data[$inputName];
          }
     }
}

if (!function_exists('selectValue')) {
     function selectValue($inputName,$data){
          if ($inputName == $data) {
               return "selected";
          }else{
               return " ";
          }
     }
}

if (!function_exists('activeAll')) {
     function activeAll($name)
     {
          if (Request::segment(2) == $name) {
               return 'active';
          }
     }
}

if (!function_exists('request2')) {
     function request2()
     {
          return Request::segment(2);
     }
}

if (!function_exists('displayBlockSetting')) {
     function displayBlockSetting()
     {
          if (request2() == 'setting'  || request2() == 'about') {
               $data = [];
               $data['active'] = 'selected active';
               $data['display'] = 'display:block';

               return $data;
          }
          
     }
}

if (!function_exists('displayBlockOtherpage')) {
     function displayBlockOtherpage()
     {
          if (request2() == 'clinics'  || request2() == 'pharmacy') {
               $data = [];
               $data['active'] = 'selected active';
               $data['display'] = 'display:block';

               return $data;
          }
          
     }
}


if (!function_exists('displayBlockadProperties')) {
     function displayBlockadProperties()
     {
          if (request2() == 'properties') {
               $data = [];
               $data['active'] = 'selected active';
               $data['display'] = 'display:block';

               return $data;
          }
          
     }
}

if (!function_exists('displayBlockOffers')) {
     function displayBlockOffers()
     {
          if (request2() == 'offers' || request2() == 'offersSections' || request2() == 'offersSectionsIndex') {
               $data = [];
               $data['active'] = 'selected active';
               $data['display'] = 'display:block';

               return $data;
          }
          
     }
}

if (!function_exists('displayBlockOrders')) {
     function displayBlockOrders()
     {
          if (request2() == 'orders') {
               $data = [];
               $data['active'] = 'selected active';
               $data['display'] = 'display:block';

               return $data;
          }
          
     }
}

if (!function_exists('displayBlockStatistics')) {
     function displayBlockStatistics()
     {
          if (request2() == 'statistics' || request2() == 'statisticsSectionsIndex' || request2() == 'statisticsSections') {
               $data = [];
               $data['active'] = 'selected active';
               $data['display'] = 'display:block';

               return $data;
          }
          
     }
}


if (!function_exists('displayBlockSochial')) {
     function displayBlockSochial()
     {
          if (request2() == 'sochials' || request2() == 'sochialsSectionsIndex' || request2() == 'sochialsSections') {
               $data = [];
               $data['active'] = 'selected active';
               $data['display'] = 'display:block';

               return $data;
          }
          
     }
}

if (!function_exists('displayBlockNews')) {
     function displayBlockNews()
     {
          if (request2() == 'authors' || request2() == 'news' || request2() == 'newsSectionsIndex' || request2() == 'newsSections') {
               $data = [];
               $data['active'] = 'selected active';
               $data['display'] = 'display:block';

               return $data;
          }
          
     }
}

if (!function_exists('displayBlockUser')) {
     function displayBlockUser()
     {
          if (request2() == 'admins' || request2() == 'groups') {
               $data = [];
               $data['active'] = 'selected active';
               $data['display'] = 'display:block';

               return $data;
          }
          
     }
}

if (!function_exists('displayBlockServices')) {
     function displayBlockServices()
     {
          if (request2() == 'services' || request2() == 'servicesSectionsIndex' || request2() == 'servicesSections') {
               $data = [];
               $data['active'] = 'selected active';
               $data['display'] = 'display:block';

               return $data;
          }
          
     }
}

if (!function_exists('displayBlockDoctors')) {
     function displayBlockDoctors()
     {
          if (request2() == 'sections' || request2() == 'doctors' || request2() == 'reservations' || request2() == 'doctorsSectionsIndex' || request2() == 'doctorsSections') {
               $data = [];
               $data['active'] = 'selected active';
               $data['display'] = 'display:block';

               return $data;
          }
          
     }
}

if (!function_exists('displayBlockPropertie')) {
     function displayBlockPropertie()
     {
          if (request2() == 'properties'  || request2() == 'selects' || request2() == 'radios') {
               $data = [];
               $data['active'] = 'selected active';
               $data['display'] = 'display:block';

               return $data;
          }
          
     }
}

if (!function_exists('displayBlockPages')) {
     function displayBlockPages()
     {
          if (request2() == 'pages' || request2() == 'pagecontents' ) {
               $data = [];
               $data['active'] = 'selected active';
               $data['display'] = 'display:block';

               return $data;
          }
          
     }
}

if (!function_exists('displayBlockContacts')) {
   function displayBlockContacts()
   {
      if (request2() == 'contacts' ) {
           $data = [];
           $data['active'] = 'selected active';
           $data['display'] = 'display:block';

           return $data;
      }
   }
}

if (!function_exists('displayBlockGallerys')) {
   function displayBlockGallerys()
   {
      if (request2() == 'gallerys' || request2() == 'gallerysSectionsIndex' || request2() == 'gallerysSections') {
           $data = [];
           $data['active'] = 'selected active';
           $data['display'] = 'display:block';

           return $data;
      }
   }
}

if (!function_exists('displayBlockManagers')) {
   function displayBlockManagers()
   {
      if (request2() == 'managers' || request2() == 'managersSectionsIndex' || request2() == 'managersSections') {
           $data = [];
           $data['active'] = 'selected active';
           $data['display'] = 'display:block';

           return $data;
      }
   }
}

if (!function_exists('displayBlockWhychooses')) {
   function displayBlockWhychooses()
   {
      if (request2() == 'whychooses' || request2() == 'whychoosesSectionsIndex'  || request2() == 'whychoosesSections') {
           $data = [];
           $data['active'] = 'selected active';
           $data['display'] = 'display:block';

           return $data;
      }
   }
}

if (!function_exists('displayBlockUserNoAdmins')) {
   function displayBlockUserNoAdmins()
   {
      if (request2() == 'users' || request2() == 'ranks') {
           $data = [];
           $data['active'] = 'selected active';
           $data['display'] = 'display:block';

           return $data;
      }
   }
}

if (!function_exists('activeHome')) {
     function activeHome()
     {
          if (!Request::segment(2)) {
               return 'active';
          }
     }
}

if (!function_exists('activeAll')) {
     function activeAll($title)
     {
          if (Request::segment(2) == $title) {
               return 'selected active';
          }
     }
}



if (!function_exists('activeOne')) {
     function activeOne($name)
     {
          if (Request::url() == adminUrl($name)) {
               return 'selected active';
          }
     }
}

if (!function_exists('activeTow')) {
     function activeTow($name)
     {
          if (Request::url() == adminUrl($name.'/create')) {
               return 'active';
          }
     }
}

if (!function_exists('setting')) {
     function setting()
     {
          return \App\Setting::find(1);
     }
}

if (!function_exists('countryName')) {
     function countryName($id)
     {
          return \App\Country::find($id);
     }
}

if (!function_exists('setLang')) {
     function setLang($lang)
     {
          \App::setLocale($lang);
     }
}

if (!function_exists('settingLang')) {
     function settingLang()
     {
          return \App\Setting::select('app_name_ar as app_name','app_logo', 'email', 'fb_link', 'tw_link', 'gogle_link', 'wats_link', 'insta_link', 'you_tube_link', 'phone_one as phone', 'lat', 'long', 'address_ar as address','terms_of_use', 'prohibited_goods', 'terms_of_add_ads', 'terms_of_add_rating', 'terms_of_add_report', 'text_of_banks')->first();
          
     }
}



if (!function_exists('getIndexDashboard')) {
     function getIndexDashboard($title){
          $counts = getCounts();
          return view('admin.home',['title'=> $title,'counts' => $counts]);
     }
}




if (!function_exists('getLoginDashboard')) {
     function getLoginDashboard(){
               return view('admin.login');
     }
}



if (!function_exists('getSetting')) {
     function getSetting(){
               return App\Setting::find(1);
     }
}

if (!function_exists('getClinics')) {
     function getClinics(){
               return App\Otherpage::find(1);
     }
}

if (!function_exists('getPharmacy')) {
     function getPharmacy(){
               return App\Otherpage::find(2);
     }
}



if (!function_exists('getAdmin')) {
     function getAdmin($id){
               return App\Admin::find($id);
     }
}


if (!function_exists('getCounts')) {
     function getCounts(){
          $data=[];
          $data['users']              =  App\User::where('active',1)->count();
          return $data;
     }
}

if (!function_exists('keyIp')) {
     function keyIp(){
               return '8e806c6acf7181089c459d479895d809';
     }
}



if (!function_exists('getUser')) {
     function getUser($user_id){
               return \App\User::find($user_id);
     }
}

if (!function_exists('indexControllers')) {
     function indexControllers($folder,$title,$data){
               return $data->render('admin.'.$folder.'.index',['title'=> $title]);
     }
}



if (!function_exists('createControllers')) {
     function createControllers($folder,$title){
               return view('admin.'.$folder.'.create',['title'=> $title]);
     }
}



if (!function_exists('createOutherController')) {
     function createOutherController($folder,$title,$page,$data){
               return view('admin.'.$folder.'.'.$page,['title'=> $title , 'data' => $data]);
     }
}




if (!function_exists('storeControllers')) {
     function storeControllers($model,$data,$sessionTitle){
               $model::create($data);
             session()->flash('save', $sessionTitle);
     }
}


if (!function_exists('editControllers')) {
     function editControllers($model,$id,$folder,$title){
            $data = $model::find($id);
             if (!$data) {
                 return back();
             }else{
               return view('admin.'.$folder.'.update',['title'=> $title,'data'=> $data]);
             }
     }
}



if (!function_exists('updateImg')) {
     function updateImg($model,$id,$inputName,$folder){
               $data = $model::find($id);
            if (!empty($data[$inputName])) {
                Storage::delete($data[$inputName]);
            }
            return request()->file($inputName)->store($folder);
     }
}

if (!function_exists('updateControllers')) {
     function updateControllers($model,$id,$data,$sessionTitle){
               $model::where('id',$id)->update($data);
          session()->flash('save', $sessionTitle);
     }
}


if (!function_exists('deleteControllers')) {
     function deleteControllers($model,$id){

              $delete = $model::find($id);
              if($delete->delete()){
                 return response($id, 200);

             }else{
                 return response($id, 404);
             }
     }
}



if (!function_exists('deleteAllControllers')) {
     function deleteAllControllers($request,$model,$sessionTitle){
               if (is_array($request['item'])) {
                 $model::destroy($request['item']);
               }else{
                    $model::find($request['item'])->delete();
               }
             session()->flash('save', $sessionTitle);
     }
}



if (!function_exists('activeAllControllers')) {
     function activeAllControllers($request,$model,$sessionTitle){
               if (is_array($request['item'])) {
                    foreach ($request['item'] as $key => $value) {
                         $id = (int) $value;
                         $update = $model::where('id', $id)->first();
                         $update->active = (int) $request['active'];
                         $update->save();
                    }
               }
               session()->flash('save', $sessionTitle);
     }
}

if (!function_exists('indexSetting')) {
     function indexSetting($folder,$sessionTitle,$data){
          return view('admin.'.$folder.'.index',['title'=>$sessionTitle,'data'=>$data]);
     }
}

if (!function_exists('settingsSections')) {
     function settingsSections($folder,$sessionTitle,$data){
          return view('admin.'.$folder.'.setting',['title'=>$sessionTitle,'data'=>$data]);
     }
}

if (!function_exists('indexSettingSochail')) {
     function indexSettingSochail($folder,$sessionTitle,$data){
          return view('admin.'.$folder.'.sochial',['title'=>$sessionTitle,'data'=>$data]);
     }
}

if (!function_exists('indexSettingPages')) {
     function indexSettingPages($folder,$sessionTitle,$data,$page){
          return view('admin.'.$folder.'.'.$page,['title'=>$sessionTitle,'data'=>$data]);
     }
}





if (!function_exists('updateSetting')) {
     function updateSetting($model,$id,$sessionTitle,$data){
          $model::where('id',$id)->update($data);
        session()->flash('save',$sessionTitle);
     }
}


if (!function_exists('login')) {
     function login($request){
          $username = request('username');
        if (auth()->attempt(['name'=> $username ,'password'=> $request->password])) {
               $user = auth()->user();
               $user->device_token = $request->device_token;
               if($user->save()){
                    return response(['status' => true , 'msg' => trans('admin.logind') ,'data' => auth()->user()]);
               }else{
                    return response(['status' => false , 'msg' => trans('admin.noSave')]);
               }

          }else{
               return response(['status' => false , 'msg' => trans('admin.noLogin')]);
          }
        
     }
}


if (!function_exists('checkedGroup')) {
     function checkedGroup($groupId , $asRoute){
        if(\App\Groups_route::where('group_id',$groupId)->where('route',$asRoute)->first()){
          return 'checked';
        }
        
     }
}


if (!function_exists('checkRole')) {
     function checkRole($route){
      $item = \App\Groups_route::where('group_id',admin()->user()->group_id)->whereIn('route',$route)->get();
        if(count($item)>0){
          return '';
        }else{
          return 'display:none';
        }
        
     }
}

if (!function_exists('checkRoleIf')) {
     function checkRoleIf($route){
      $item = \App\Groups_route::where('group_id',admin()->user()->group_id)->whereIn('route',$route)->get();
        if(count($item)>0){
          return 1;
        }else{
          return 0;
        }
        
     }
}

if (!function_exists('countSub')) {
  function countSub($section){
    return \App\Sub_section::where('section_id',$section)->count();
  }
}



