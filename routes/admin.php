<?php

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function() {
	Config::set('auth.defines', 'admin');
	Route::get('dashboard','AdminController@dashboard');
	Route::get('login','AdminController@login');
	Route::post('login','AdminController@postLogin');
	Route::get('forgot','AdminController@forgot');
	Route::post('forgot','AdminController@postForgot');
	Route::get('reset/password/{token}','AdminController@resetPassword');
	Route::post('reset/password/{token}','AdminController@postresetPassword');

	Route::group(['middleware'=>'admin:admin'], function() {
		Route::any('logout','AdminController@logout');
	    Route::get('/',  ['uses' => 'AdminController@index', 'as' => 'adminAll' , 'name' => trans('admin.Dashboard')]);
		Route::get('profile', ['uses' => 'AdminController@profile', 'as' => 'profile' , 'name' => trans('admin.profile')]);

		// settings 
		Route::get('setting', ['uses' => 'SettingController@index', 'as' => 'settingIndex' , 'name' => trans('admin.setting')]);

		Route::put('setting/{id}', ['uses' => 'SettingController@update', 'as' => 'settingUpdate' , 'name' => trans('admin.settingUpdate')]);

		Route::get('about', ['uses' => 'SettingController@about', 'as' => 'aboutIndex' , 'name' => 'وصف الموقع']);

		Route::put('about/{id}', ['uses' => 'SettingController@aboutUpdate', 'as' => 'aboutUpdate' , 'name' => 'تعديل وصف الموقع']);

		Route::get('clinics', ['uses' => 'SettingController@clinics', 'as' => 'clinicsIndex' , 'name' => 'العيادات']);

		Route::put('clinics/{id}', ['uses' => 'SettingController@clinicsUpdate', 'as' => 'clinicsUpdate' , 'name' => 'تعديل العيادات']);

		Route::get('pharmacy', ['uses' => 'SettingController@pharmacy', 'as' => 'pharmacyIndex' , 'name' => 'الصيدلية']);

		Route::put('pharmacy/{id}', ['uses' => 'SettingController@pharmacyUpdate', 'as' => 'pharmacyUpdate' , 'name' => 'تعديل الصيدلية']);



		// end settings route

		// sochialsSections
		Route::get('sochialsSections', ['uses' => 'SettingController@sochialsSections', 'as' => 'sochialsSectionsIndex' , 'name' => 'أعدادات روابط التواصل الأجتماعى']);

		Route::put('sochialsSections/{id}', ['uses' => 'SettingController@sochialsSectionsUpdate', 'as' => 'sochialsSectionsUpdate' , 'name' => 'تعديل  اعدادات روابط التواصل الأجتماعى']);
		// end sochialsSections

		// newsSections
		Route::get('newsSections', ['uses' => 'SettingController@newsSections', 'as' => 'newsSectionsIndex' , 'name' => 'أعدادات الأخبار']);

		Route::put('newsSections/{id}', ['uses' => 'SettingController@newsSectionsUpdate', 'as' => 'newsSectionsUpdate' , 'name' => 'تعديل أعدادات الأخبار']);
		// end newsSections

		// servicesSections
		Route::get('servicesSections', ['uses' => 'SettingController@servicesSections', 'as' => 'servicesSectionsIndex' , 'name' => 'أعدادات الخدمات']);

		Route::put('servicesSections/{id}', ['uses' => 'SettingController@servicesSectionsUpdate', 'as' => 'servicesSectionsUpdate' , 'name' => 'تعديل أعدادات الخدمات']);
		// end servicesSections

		// gallerysSections
		Route::get('gallerysSections', ['uses' => 'SettingController@gallerysSections', 'as' => 'gallerysSectionsIndex' , 'name' => 'أعدادات معرض الخصائص']);

		Route::put('gallerysSections/{id}', ['uses' => 'SettingController@gallerysSectionsUpdate', 'as' => 'gallerysSectionsUpdate' , 'name' => 'تعديل أعدادات معرض الخصائص']);
		// end gallerysSections

		// managersSections
		Route::get('managersSections', ['uses' => 'SettingController@managersSections', 'as' => 'managersSectionsIndex' , 'name' => 'اعدادات اعضاء المستشفي']);

		Route::put('managersSections/{id}', ['uses' => 'SettingController@managersSectionsUpdate', 'as' => 'managersSectionsUpdate' , 'name' => 'تعديل اعدادات  اعضاء المستشفي']);
		// end managersSections

		// whychoosesSections
		Route::get('whychoosesSections', ['uses' => 'SettingController@whychoosesSections', 'as' => 'whychoosesSectionsIndex' , 'name' => 'اعدادات لماذا تختار']);

		Route::put('whychoosesSections/{id}', ['uses' => 'SettingController@whychoosesSectionsUpdate', 'as' => 'whychoosesSectionsUpdate' , 'name' => 'تعديل اعدادات لماذا تختار']);
		// end whychoosesSections

		// doctorsSections
		Route::get('doctorsSections', ['uses' => 'SettingController@doctorsSections', 'as' => 'doctorsSectionsIndex' , 'name' => 'اعدادات الأطباء']);

		Route::put('doctorsSections/{id}', ['uses' => 'SettingController@doctorsSectionsUpdate', 'as' => 'doctorsSectionsUpdate' , 'name' => 'تعديل اعدادات الأطباء']);
		// end doctorsSections

		// statisticsSections
		Route::get('statisticsSections', ['uses' => 'SettingController@statisticsSections', 'as' => 'statisticsSectionsIndex' , 'name' => 'اعدادات الأحصائيات']);

		Route::put('statisticsSections/{id}', ['uses' => 'SettingController@statisticsSectionsUpdate', 'as' => 'statisticsSectionsUpdate' , 'name' => 'تعديل اعدادات الأحصائيات']);
		// end statisticsSections

		// offersSections
		Route::get('offersSections', ['uses' => 'SettingController@offersSections', 'as' => 'offersSectionsIndex' , 'name' => 'اعدادات العروض']);

		Route::put('offersSections/{id}', ['uses' => 'SettingController@offersSectionsUpdate', 'as' => 'offersSectionsUpdate' , 'name' => 'تعديل اعدادات العروض']);
		// end statisticsSections

		

		// properties
		Route::get('properties', ['uses' => 'AdPropertiesController@index' , 'as' => 'properties' , 'name' => 'التحكم فى المميزات']);

		Route::post('properties', ['uses' => 'AdPropertiesController@store']);

		Route::get('properties/{id}/edit', ['uses' => 'AdPropertiesController@edit' , 'as' => 'propertiesEdit' , 'name' => 'تعديل  بيانات ميزة']);

		Route::put('properties/{id}', ['uses' => 'AdPropertiesController@update']);
		// end properties routes

		// sochials
		Route::get('sochials', ['uses' => 'SochialsController@index' , 'as' => 'sochials' , 'name' => 'روابط التواصل الأجتماعى']);

		// Route::get('sochials/create', ['uses' => 'SochialsController@create' , 'as' => 'sochialsCreate' , 'name' => 'أضافة رابط']);

		Route::post('sochials', ['uses' => 'SochialsController@store']);

		Route::get('sochials/{id}/edit', ['uses' => 'SochialsController@edit' , 'as' => 'sochialsEdit' , 'name' => 'تعديل  بيانات رابط']);

		Route::put('sochials/{id}', ['uses' => 'SochialsController@update']);

		Route::delete('sochials/{id}', ['uses' => 'SochialsController@destroy' , 'as' => 'sochialsDestroy' , 'name' => 'حذف   رابط']);

		Route::delete('sochials/destroy/all', ['uses' => 'SochialsController@deleteAll' , 'as' => 'sochialsDestroyMultiple' , 'name' => 'حذف  متعدد  للروابط ']);

		Route::delete('sochials/active/all', ['uses' => 'SochialsController@activeAll' , 'as' => 'sochialsactiveMultiple' , 'name' => 'تفعيل متعدد  للروابط ']);
		// end sochials routes

		// authors
		Route::get('authors', ['uses' => 'AuthorsController@index' , 'as' => 'authors' , 'name' => 'كتاب الأخبار ا']);

		Route::get('authors/create', ['uses' => 'AuthorsController@create' , 'as' => 'authorsCreate' , 'name' => 'أضافة كاتب']);

		Route::post('authors', ['uses' => 'AuthorsController@store']);

		Route::get('authors/{id}/edit', ['uses' => 'AuthorsController@edit' , 'as' => 'authorsEdit' , 'name' => 'تعديل بيانات كاتب']);

		Route::put('authors/{id}', ['uses' => 'AuthorsController@update']);

		Route::delete('authors/{id}', ['uses' => 'AuthorsController@destroy' , 'as' => 'authorsDestroy' , 'name' => 'حذف كاتب']);

		Route::delete('authors/destroy/all', ['uses' => 'AuthorsController@deleteAll' , 'as' => 'authorsDestroyMultiple' , 'name' => 'حذف  متعدد للكتاب']);

		Route::delete('authors/active/all', ['uses' => 'AuthorsController@activeAll' , 'as' => 'authorsactiveMultiple' , 'name' => 'تفعيل متعدد للكتاب']);
		// end authors routes

		// news
		Route::get('news', ['uses' => 'NewsController@index' , 'as' => 'news' , 'name' => 'الأخبار']);

		Route::get('news/create', ['uses' => 'NewsController@create' , 'as' => 'newsCreate' , 'name' => 'أضافة خبر']);

		Route::post('news', ['uses' => 'NewsController@store']);

		Route::get('news/{id}/edit', ['uses' => 'NewsController@edit' , 'as' => 'newsEdit' , 'name' => 'تعديل بيانات خبر']);

		Route::put('news/{id}', ['uses' => 'NewsController@update']);

		Route::delete('news/{id}', ['uses' => 'NewsController@destroy' , 'as' => 'newsDestroy' , 'name' => 'حذف خبر']);

		Route::delete('news/destroy/all', ['uses' => 'NewsController@deleteAll' , 'as' => 'newsDestroyMultiple' , 'name' => 'حذف  متعدد للأخبار']);

		Route::delete('news/active/all', ['uses' => 'NewsController@activeAll' , 'as' => 'newsactiveMultiple' , 'name' => 'تفعيل متعدد للأخبار']);
		// end news routes

		// services
		Route::get('services', ['uses' => 'ServicesController@index' , 'as' => 'services' , 'name' => 'الخدمات']);

		Route::get('services/create', ['uses' => 'ServicesController@create' , 'as' => 'servicesCreate' , 'name' => 'أضافة خدمة']);

		Route::post('services', ['uses' => 'ServicesController@store']);

		Route::get('services/{id}/edit', ['uses' => 'ServicesController@edit' , 'as' => 'servicesEdit' , 'name' => 'تعديل بيانات خدمة']);

		Route::put('services/{id}', ['uses' => 'ServicesController@update']);

		Route::delete('services/{id}', ['uses' => 'ServicesController@destroy' , 'as' => 'servicesDestroy' , 'name' => 'حذف خدمة']);

		Route::delete('services/destroy/all', ['uses' => 'ServicesController@deleteAll' , 'as' => 'servicesDestroyMultiple' , 'name' => 'حذف  متعدد للخدمات']);

		Route::delete('services/active/all', ['uses' => 'ServicesController@activeAll' , 'as' => 'servicesactiveMultiple' , 'name' => 'تفعيل متعدد للخدمات']);
		// end services routes

		// gallerys
		Route::get('gallerys', ['uses' => 'GallerysController@index' , 'as' => 'gallerys' , 'name' => 'معرض الخصائص']);

		Route::get('gallerys/create', ['uses' => 'GallerysController@create' , 'as' => 'gallerysCreate' , 'name' => 'أضافة صورة فى المعرض']);

		Route::post('gallerys', ['uses' => 'GallerysController@store']);

		Route::get('gallerys/{id}/edit', ['uses' => 'GallerysController@edit' , 'as' => 'gallerysEdit' , 'name' => 'تعديل بيانات صورة فى المعرض']);

		Route::put('gallerys/{id}', ['uses' => 'GallerysController@update']);

		Route::delete('gallerys/{id}', ['uses' => 'GallerysController@destroy' , 'as' => 'gallerysDestroy' , 'name' => 'حذف صورة فى المعرض']);

		Route::delete('gallerys/destroy/all', ['uses' => 'GallerysController@deleteAll' , 'as' => 'gallerysDestroyMultiple' , 'name' => 'حذف  متعدد للمعرض']);

		Route::delete('gallerys/active/all', ['uses' => 'GallerysController@activeAll' , 'as' => 'gallerysactiveMultiple' , 'name' => 'تفعيل متعدد للمعرض']);
		// end gallerys routes

		// managers
		Route::get('managers', ['uses' => 'ManagersController@index' , 'as' => 'managers' , 'name' => 'اعضاء ومديرين المستشفي']);

		Route::get('managers/create', ['uses' => 'ManagersController@create' , 'as' => 'managersCreate' , 'name' => 'أضافة لأعضاء المستشفي']);

		Route::post('managers', ['uses' => 'ManagersController@store']);

		Route::get('managers/{id}/edit', ['uses' => 'ManagersController@edit' , 'as' => 'managersEdit' , 'name' => 'تعديل بيانات لأعضاء المستشفي']);

		Route::put('managers/{id}', ['uses' => 'ManagersController@update']);

		Route::delete('managers/{id}', ['uses' => 'ManagersController@destroy' , 'as' => 'managersDestroy' , 'name' => 'حذف لأعضاء المستشفي']);

		Route::delete('managers/destroy/all', ['uses' => 'ManagersController@deleteAll' , 'as' => 'managersDestroyMultiple' , 'name' => 'حذف  متعدد لأعضاء المستشفي']);

		Route::delete('managers/active/all', ['uses' => 'ManagersController@activeAll' , 'as' => 'managersactiveMultiple' , 'name' => 'تفعيل متعدد لأعضاء المستشفي']);
		// end managers routes

		// whychooses
		Route::get('whychooses', ['uses' => 'WhychoosesController@index' , 'as' => 'whychooses' , 'name' => 'لماذا تختار ؟']);

		Route::get('whychooses/create', ['uses' => 'WhychoosesController@create' , 'as' => 'whychoosesCreate' , 'name' => 'أضافة فى لمائا تختار']);

		Route::post('whychooses', ['uses' => 'WhychoosesController@store']);

		Route::get('whychooses/{id}/edit', ['uses' => 'WhychoosesController@edit' , 'as' => 'whychoosesEdit' , 'name' => 'تعديل بيانات فى لمائا تختار']);

		Route::put('whychooses/{id}', ['uses' => 'WhychoosesController@update']);

		Route::delete('whychooses/{id}', ['uses' => 'WhychoosesController@destroy' , 'as' => 'whychoosesDestroy' , 'name' => 'حذف فى لمائا تختار']);

		Route::delete('whychooses/destroy/all', ['uses' => 'WhychoosesController@deleteAll' , 'as' => 'whychoosesDestroyMultiple' , 'name' => 'حذف  متعدد فى  ماذا تختار؟']);

		Route::delete('whychooses/active/all', ['uses' => 'WhychoosesController@activeAll' , 'as' => 'whychoosesactiveMultiple' , 'name' => 'تفعيل متعدد  فى لماذا تختار']);
		// end whychooses routes

		// sections
		Route::get('sections', ['uses' => 'SectionsController@index' , 'as' => 'sections' , 'name' => 'الأقسام']);

		Route::get('sections/create', ['uses' => 'SectionsController@create' , 'as' => 'sectionsCreate' , 'name' => 'أضافة قسم']);

		Route::post('sections', ['uses' => 'SectionsController@store']);

		Route::get('sections/{id}/edit', ['uses' => 'SectionsController@edit' , 'as' => 'sectionsEdit' , 'name' => 'تعديل بيانات قسم']);

		Route::put('sections/{id}', ['uses' => 'SectionsController@update']);

		Route::delete('sections/{id}', ['uses' => 'SectionsController@destroy' , 'as' => 'sectionsDestroy' , 'name' => 'حذف قسم']);

		Route::delete('sections/destroy/all', ['uses' => 'SectionsController@deleteAll' , 'as' => 'sectionsDestroyMultiple' , 'name' => 'حذف  متعدد للأقسام']);

		Route::delete('sections/active/all', ['uses' => 'SectionsController@activeAll' , 'as' => 'sectionsactiveMultiple' , 'name' => 'تفعيل متعدد للأقسام']);
		// end sections routes

		// doctors
		Route::get('doctors', ['uses' => 'DoctorsController@index' , 'as' => 'doctors' , 'name' => 'الأطباء']);

		Route::get('doctors/create', ['uses' => 'DoctorsController@create' , 'as' => 'doctorsCreate' , 'name' => 'أضافة طبيب']);

		Route::post('doctors', ['uses' => 'DoctorsController@store']);

		Route::get('doctors/{id}/edit', ['uses' => 'DoctorsController@edit' , 'as' => 'doctorsEdit' , 'name' => 'تعديل بيانات طبيب']);

		Route::put('doctors/{id}', ['uses' => 'DoctorsController@update']);

		Route::delete('doctors/{id}', ['uses' => 'DoctorsController@destroy' , 'as' => 'doctorsDestroy' , 'name' => 'حذف طبيب']);

		Route::delete('doctors/destroy/all', ['uses' => 'DoctorsController@deleteAll' , 'as' => 'doctorsDestroyMultiple' , 'name' => 'حذف  متعدد للأطباء']);

		Route::delete('doctors/active/all', ['uses' => 'DoctorsController@activeAll' , 'as' => 'doctorsactiveMultiple' , 'name' => 'تفعيل متعدد للأطباء']);
		// end doctors routes

		// reservations
		Route::get('reservations', ['uses' => 'ReservationsController@index' , 'as' => 'reservations' , 'name' => 'رسائل  حجوزات الأطباء']);

		Route::delete('reservations/{id}', ['uses' => 'ReservationsController@destroy' , 'as' => 'reservationsDestroy' , 'name' => 'حذف   رسالة  حجز']);

		Route::get('reservations/{id}', ['uses' => 'ReservationsController@show' , 'as' => 'reservationsShow' , 'name' => 'عرض  رسالة  حجز']);


		Route::delete('reservations/destroy/all', ['uses' => 'ReservationsController@deleteAll' , 'as' => 'reservationsDestroyMultiple' , 'name' => 'حذف  متعدد  لرسائل  حجز']);

		// end reservations routes

		// orders
		Route::get('orders', ['uses' => 'OrdersController@index' , 'as' => 'orders' , 'name' => 'رسائل  طلبات تحديد موعد']);

		Route::delete('orders/{id}', ['uses' => 'OrdersController@destroy' , 'as' => 'ordersDestroy' , 'name' => 'حذف   رسالة  طلب حجز موعد']);

		Route::get('orders/{id}', ['uses' => 'OrdersController@show' , 'as' => 'ordersShow' , 'name' => 'عرض  رسالة  طلب حجز موعد']);


		Route::delete('orders/destroy/all', ['uses' => 'OrdersController@deleteAll' , 'as' => 'ordersDestroyMultiple' , 'name' => 'حذف  متعدد  لرسائل  طلب حجز موعد']);

		// end orders routes

		// statistics
		Route::get('statistics', ['uses' => 'StatisticsController@index' , 'as' => 'statistics' , 'name' => 'الأحصائيات']);

		Route::get('statistics/create', ['uses' => 'StatisticsController@create' , 'as' => 'statisticsCreate' , 'name' => 'أضافة احصائية']);

		Route::post('statistics', ['uses' => 'StatisticsController@store']);

		Route::get('statistics/{id}/edit', ['uses' => 'StatisticsController@edit' , 'as' => 'statisticsEdit' , 'name' => 'تعديل بيانات احصائية']);

		Route::put('statistics/{id}', ['uses' => 'StatisticsController@update']);

		Route::delete('statistics/{id}', ['uses' => 'StatisticsController@destroy' , 'as' => 'statisticsDestroy' , 'name' => 'حذف احصائية']);

		Route::delete('statistics/destroy/all', ['uses' => 'StatisticsController@deleteAll' , 'as' => 'statisticsDestroyMultiple' , 'name' => 'حذف  متعدد للأحصائيات']);

		Route::delete('statistics/active/all', ['uses' => 'StatisticsController@activeAll' , 'as' => 'statisticsactiveMultiple' , 'name' => 'تفعيل متعدد للأحصائيات']);
		// end statistics routes

		// offers
		Route::get('offers', ['uses' => 'OffersController@index' , 'as' => 'offers' , 'name' => 'التحكم فى العروض التجارية']);

		Route::get('offers/create', ['uses' => 'OffersController@create' , 'as' => 'offersCreate' , 'name' => 'أضافة عرض']);

		Route::post('offers', ['uses' => 'OffersController@store']);

		Route::get('offers/{id}/edit', ['uses' => 'OffersController@edit' , 'as' => 'offersEdit' , 'name' => 'تعديل  بيانات عرض']);

		Route::put('offers/{id}', ['uses' => 'OffersController@update']);

		Route::delete('offers/{id}', ['uses' => 'OffersController@destroy' , 'as' => 'offersDestroy' , 'name' => 'حذف   عرض']);

		Route::delete('offers/destroy/all', ['uses' => 'OffersController@deleteAll' , 'as' => 'offersDestroyMultiple' , 'name' => 'حذف  متعدد   للعروض ']);

		Route::delete('offers/active/all', ['uses' => 'OffersController@activeAll' , 'as' => 'offersactiveMultiple' , 'name' => 'تفعيل متعدد   للعروض ']);
		// end offers routes

		// pages
		Route::get('pages', ['uses' => 'PagesController@index' , 'as' => 'pages' , 'name' => 'الصفحات']);

		Route::get('pages/create', ['uses' => 'PagesController@create' , 'as' => 'pagesCreate' , 'name' => 'أضافة  صفحة']);

		Route::post('pages', ['uses' => 'PagesController@store']);

		Route::get('pages/{id}/edit', ['uses' => 'PagesController@edit' , 'as' => 'pagesEdit' , 'name' => 'تعديل بيانات  صفحة']);

		Route::put('pages/{id}', ['uses' => 'PagesController@update']);

		Route::delete('pages/{id}', ['uses' => 'PagesController@destroy' , 'as' => 'pagesDestroy' , 'name' => 'حذف  صفحة']);

		Route::delete('pages/destroy/all', ['uses' => 'PagesController@deleteAll' , 'as' => 'pagesDestroyMultiple' , 'name' => 'حذف  متعدد  للصفحات']);

		Route::delete('pages/active/all', ['uses' => 'PagesController@activeAll' , 'as' => 'pagesactiveMultiple' , 'name' => 'تفعيل متعدد  للصفحات']);
		// end pages routes

		// archives
		Route::get('pagecontents', ['uses' => 'PagecontentsController@index']);
		Route::get('pagecontents/create', ['uses' => 'PagecontentsController@create']);
		Route::post('pagecontents', ['uses' => 'PagecontentsController@store']);
		Route::get('pagecontents/{id}/edit', ['uses' => 'PagecontentsController@edit']);
		Route::put('pagecontents/{id}', ['uses' => 'PagecontentsController@update']);
		Route::delete('pagecontents/{id}', ['uses' => 'PagecontentsController@destroy']);
		Route::delete('pagecontents/destroy/all', ['uses' => 'PagecontentsController@deleteAll' ]);
		Route::delete('pagecontents/active/all', ['uses' => 'PagecontentsController@activeAll']);
		// end pagecontents routes

		// contacts
		Route::get('contacts', ['uses' => 'ContactsController@index' , 'as' => 'contacts' , 'name' => 'رسائل اتصل بنا']);

		Route::delete('contacts/{id}', ['uses' => 'ContactsController@destroy' , 'as' => 'contactsDestroy' , 'name' => 'حذف   رسالة اتصل بنا']);

		Route::get('contacts/{id}', ['uses' => 'ContactsController@show' , 'as' => 'contactsShow' , 'name' => 'عرض  رسالة اتصل بنا']);


		Route::delete('contacts/destroy/all', ['uses' => 'ContactsController@deleteAll' , 'as' => 'contactsDestroyMultiple' , 'name' => 'حذف  متعدد  لرسائل اتصل بنا']);

		// end contacts routes

		// admins
		Route::get('admins', ['uses' => 'AdminsController@index' , 'as' => 'admins' , 'name' => trans('admin.adminControllerIndex')]);

		Route::get('admins/create', ['uses' => 'AdminsController@create' , 'as' => 'adminsCreate' , 'name' => trans('admin.addAdmin')]);

		Route::post('admins', ['uses' => 'AdminsController@store']);

		Route::get('admins/{id}/edit', ['uses' => 'AdminsController@edit' , 'as' => 'adminsEdit' , 'name' => trans('admin.editAdmin')]);

		Route::put('admins/{id}', ['uses' => 'AdminsController@update']);

		Route::delete('admins/{id}', ['uses' => 'AdminsController@destroy' , 'as' => 'adminsDestroy' , 'name' => trans('admin.adminsdelete')]);

		Route::delete('admins/destroy/all', ['uses' => 'AdminsController@deleteAll' , 'as' => 'adminsDestroyMultiple' , 'name' => trans('admin.adminsDestroyMultiple')]);

		Route::delete('admins/active/all', ['uses' => 'AdminsController@activeAll' , 'as' => 'adminsactiveMultiple' , 'name' => trans('admin.adminsactiveMultiple')]);
		// end admins routes

		
		// groups
		Route::get('groups', ['uses' => 'GroupsController@index' , 'as' => 'groups' , 'name' => trans('admin.groupsControllerIndex')]);

		Route::get('groups/create', ['uses' => 'GroupsController@create' , 'as' => 'groupsCreate' , 'name' => trans('admin.addGroup')]);

		Route::post('groups', ['uses' => 'GroupsController@store']);

		Route::get('groups/{id}/edit', ['uses' => 'GroupsController@edit' , 'as' => 'groupsEdit' , 'name' => trans('admin.editGroup')]);

		Route::put('groups/{id}', ['uses' => 'GroupsController@update']);

		Route::delete('groups/{id}', ['uses' => 'GroupsController@destroy' , 'as' => 'groupsDestroy' , 'name' => trans('admin.groupsdelete')]);

		Route::delete('groups/destroy/all', ['uses' => 'GroupsController@deleteAll' , 'as' => 'groupsDestroyMultiple' , 'name' => trans('admin.groupsDestroyMultiple')]);

		Route::delete('groups/active/all', ['uses' => 'GroupsController@activeAll' , 'as' => 'groupsactiveMultiple' , 'name' => trans('admin.groupsactiveMultiple')]);

		// end groups routes

		
	});

	Route::get('lang/{lang}',function($lang){

		App::setLocale($lang);
		session()->has('lang')?session()->forget('lang'):App::getLocale();
		$lang == 'ar'?session()->put('lang','ar'):session()->put('lang','en');

		return back();
	});
	
});
