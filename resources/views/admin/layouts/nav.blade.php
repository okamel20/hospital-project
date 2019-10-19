    <div class="sidebar" data-color="purple" data-background-color="black" data-image="@if(!empty(setting())){{ Storage::url(setting()['app_logo']) }} @endif">
     
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          @if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">

            <li class="nav-item {{ activeHome() }}  ">
                <a class="nav-link" href="{{ adminUrl('') }}">
                  <i class="material-icons">home</i>
                  <p>لوحة التحكم</p>
                </a>
            </li>


            <li class="{{ displayBlockSetting()['active'] }} nav-item dropdown " style="{{checkRole(['settingIndex','tips','causes'])}}">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">settings</i>
                    </span>
                    <span class="nav-title">{{ trans('admin.setting') }}</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item {{ activeOne('setting') }}" href="{{ route('settingIndex') }}" style="color: black ; {{checkRole(['settingIndex'])}}" >{{ trans('admin.setting') }}</a>
                
                <a class="dropdown-item {{ activeOne('about') }}" href="{{ route('aboutIndex') }}" style="color: black;{{checkRole(['aboutIndex'])}}" >وصف الموقع</a>
              </div>
            </li>

            <li class="{{ displayBlockadProperties()['active'] }} nav-item dropdown" style="{{checkRole(['properties'])}}">

                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">settings_applications</i>
                    </span>
                    <span class="nav-title">التحكم فى المميزات</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item {{ activeOne('properties') }}" href="{{ route('properties') }}" style="color: black;{{checkRole(['properties'])}}" >جميع المميزات</a>

                </div>
            </li>

            <li class="{{ displayBlockSochial()['active'] }} nav-item dropdown"  style="{{checkRole(['sochials','sochialsSectionsIndex'])}}">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">public</i>
                    </span>
                    <span class="nav-title">روابط التواصل </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item {{ activeOne('sochialsSections') }}" href="{{ route('sochialsSectionsIndex') }}" style="color: black;{{checkRole(['sochialsSectionsIndex'])}}" >الأعدادات</a>
                    <a class="dropdown-item {{ activeOne('sochials') }}" href="{{ route('sochials') }}" style="color: black;{{checkRole(['sochials'])}}" >روابط التواصل الأجتماعى</a>
                </div>
            </li>

            <li class="{{ displayBlockNews()['active'] }} nav-item dropdown"  style="{{checkRole(['news','authors','newsSectionsIndex'])}}">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">speaker_notes</i>
                    </span>
                    <span class="nav-title">الأخبار </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item {{ activeOne('newsSections') }}" href="{{ route('newsSectionsIndex') }}" style="color: black;{{checkRole(['newsSectionsIndex'])}}" >الأعدادات</a>
                    <a class="dropdown-item {{ activeOne('authors') }}" href="{{ route('authors') }}" style="color: black;{{checkRole(['authors'])}}" >كاتبين الأخبار</a>
                    <a class="dropdown-item {{ activeOne('news') }}" href="{{ route('news') }}" style="color: black;{{checkRole(['news'])}}" >الأخبار</a>
                </div>
            </li>

            <li class="{{ displayBlockServices()['active'] }} nav-item dropdown"  style="{{checkRole(['services','servicesSectionsIndex'])}}">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">tag_faces</i>
                    </span>
                    <span class="nav-title">الخدمات </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item {{ activeOne('servicesSections') }}" href="{{ route('servicesSectionsIndex') }}" style="color: black;{{checkRole(['servicesSectionsIndex'])}}" >الأعدادات</a>
                    <a class="dropdown-item {{ activeOne('services') }}" href="{{ route('services') }}" style="color: black;{{checkRole(['services'])}}" >الخدمات</a>
                    
                </div>
            </li>

            <li class="{{ displayBlockGallerys()['active'] }} nav-item dropdown"  style="{{checkRole(['gallerys','gallerysSectionsIndex'])}}">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">add_to_photos</i>
                    </span>
                    <span class="nav-title">معرض الخصائص </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item {{ activeOne('gallerysSections') }}" href="{{ route('gallerysSectionsIndex') }}" style="color: black;{{checkRole(['gallerysSectionsIndex'])}}" >الأعدادات</a>
                    <a class="dropdown-item {{ activeOne('gallerys') }}" href="{{ route('gallerys') }}" style="color: black;{{checkRole(['gallerys'])}}" >معرض الخصائص</a>
                    
                </div>
            </li>

            <li class="{{ displayBlockManagers()['active'] }} nav-item dropdown"  style="{{checkRole(['managers','managersSectionsIndex'])}}">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">supervisor_account</i>
                    </span>
                    <span class="nav-title"> مديرين المستشفي</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item {{ activeOne('managersSections') }}" href="{{ route('managersSectionsIndex') }}" style="color: black;{{checkRole(['managersSectionsIndex'])}}" >الأعدادات</a>
                    <a class="dropdown-item {{ activeOne('managers') }}" href="{{ route('managers') }}" style="color: black;{{checkRole(['managers'])}}" >اعضاء ومديرين المستشفي</a>
                    
                </div>
            </li>

            <li class="{{ displayBlockWhychooses()['active'] }} nav-item dropdown"  style="{{checkRole(['whychooses','whychoosesSectionsIndex'])}}">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">favorite</i>
                    </span>
                    <span class="nav-title">لماذا تختار ؟ </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item {{ activeOne('whychoosesSections') }}" href="{{ route('whychoosesSectionsIndex') }}" style="color: black;{{checkRole(['whychoosesSectionsIndex'])}}" >الأعدادات</a>
                    <a class="dropdown-item {{ activeOne('whychooses') }}" href="{{ route('whychooses') }}" style="color: black;{{checkRole(['whychooses'])}}" >لماذا تختار ؟</a>
                    
                </div>
            </li>

            <li class="{{ displayBlockDoctors()['active'] }} nav-item dropdown"  style="{{checkRole(['doctors','sections','reservations','doctorsSectionsIndex'])}}">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        {{-- <i class="material-icons">child_care</i> --}}
                        <i class="fas fa-user-md"></i>
                    </span>
                    <span class="nav-title">الأطباء</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item {{ activeOne('doctorsSections') }}" href="{{ route('doctorsSectionsIndex') }}" style="color: black;{{checkRole(['doctorsSectionsIndex'])}}" >الأعدادات</a>
                    <a class="dropdown-item {{ activeOne('sections') }}" href="{{ route('sections') }}" style="color: black;{{checkRole(['sections'])}}" >الأقسام</a>
                    <a class="dropdown-item {{ activeOne('doctors') }}" href="{{ route('doctors') }}" style="color: black;{{checkRole(['doctors'])}}" >الأطباء</a>
                    <a class="dropdown-item {{ activeOne('reservations') }}" href="{{ route('reservations') }}" style="color: black;{{checkRole(['reservations'])}}" >الحجوزات</a>
                    
                </div>
            </li>

            <li class="{{ displayBlockStatistics()['active'] }} nav-item dropdown" style="{{checkRole(['statistics','statisticsSectionsIndex'])}}">

                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">settings_applications</i>
                    </span>
                    <span class="nav-title">التحكم فى الأحصائيات</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item {{ activeOne('statisticsSections') }}" href="{{ route('statisticsSectionsIndex') }}" style="color: black;{{checkRole(['statisticsSectionsIndex'])}}" >الأعدادات</a>
                    <a class="dropdown-item {{ activeOne('statistics') }}" href="{{ route('statistics') }}" style="color: black;{{checkRole(['statistics'])}}" >جميع الأحصائيات</a>

                </div>
            </li>

            <li class="{{ displayBlockOffers()['active'] }} nav-item dropdown" style="{{checkRole(['offers','offersSectionsIndex'])}}">

                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">settings_applications</i>
                    </span>
                    <span class="nav-title">التحكم فى العروض</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item {{ activeOne('offersSections') }}" href="{{ route('offersSectionsIndex') }}" style="color: black;{{checkRole(['offersSectionsIndex'])}}" >الأعدادات</a>
                    <a class="dropdown-item {{ activeOne('offers') }}" href="{{ route('offers') }}" style="color: black;{{checkRole(['offers'])}}" >جميع العروض</a>

                </div>
            </li>

            <li class="{{ displayBlockPages()['active'] }} nav-item dropdown"  style="{{checkRole(['pages'])}}">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">pages</i>
                    </span>
                    <span class="nav-title">الصفحات</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item {{ activeOne('pages') }}" href="{{ route('pages') }}" style="color: black;{{checkRole(['pages'])}}" >جميع الصفحات</a>

                    
                </div>
            </li>

            <li class="{{ displayBlockOtherpage()['active'] }} nav-item dropdown " style="{{checkRole(['clinicsIndex','pharmacyIndex'])}}">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">settings</i>
                    </span>
                    <span class="nav-title">العيادات والصيدلية</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item {{ activeOne('clinics') }}" href="{{ route('clinicsIndex') }}" style="color: black;{{checkRole(['clinicsIndex'])}}" >العيادات</a>
                <a class="dropdown-item {{ activeOne('pharmacy') }}" href="{{ route('pharmacyIndex') }}" style="color: black;{{checkRole(['pharmacyIndex'])}}" >الصيدلية</a>
              </div>
            </li>

            <li class="{{ displayBlockContacts()['active'] }} nav-item dropdown"  style="{{checkRole(['contacts'])}}">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">contact_mail</i>
                    </span>
                    <span class="nav-title">رسائل اتصل بنا</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    
                    <a class="dropdown-item {{ activeOne('contacts') }}" href="{{ route('contacts') }}" style="color: black;{{checkRole(['contacts'])}}" >رسائل اتصل بنا</a>
                </div>
            </li>
            <li class="{{ displayBlockOrders()['active'] }} nav-item dropdown"  style="{{checkRole(['orders'])}}">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">contact_mail</i>
                    </span>
                    <span class="nav-title">طلبات تحديد موعد</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    
                    <a class="dropdown-item {{ activeOne('orders') }}" href="{{ route('orders') }}" style="color: black;{{checkRole(['orders'])}}" >طلبات تحديد موعد</a>
                </div>
            </li>
           
            <li class="{{ displayBlockUser()['active'] }} nav-item dropdown"  style="{{checkRole(['admins','groups'])}}">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">supervised_user_circle</i>
                    </span>
                    <span class="nav-title">{{ trans('admin.admins') }}</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item {{ activeOne('admins') }}" href="{{ route('admins') }}" style="color: black;{{checkRole(['admins'])}}" >{{ trans('admin.admins') }}</a>

                    <a class="dropdown-item {{ activeOne('groups') }}" href="{{ route('groups') }}" style="color: black;{{checkRole(['groups'])}}" >{{ trans('admin.groups') }}</a>
                </div>
            </li>

          

          
          {{-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> --}}
        </ul>
      </div>
    </div>
