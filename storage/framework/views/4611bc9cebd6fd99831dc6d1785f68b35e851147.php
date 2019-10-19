    <div class="sidebar" data-color="purple" data-background-color="black" data-image="<?php if(!empty(setting())): ?><?php echo e(Storage::url(setting()['app_logo'])); ?> <?php endif; ?>">
     
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          <?php if(!empty(setting())): ?><?php echo e(setting()['app_name_'.lang()]); ?> <?php endif; ?>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">

            <li class="nav-item <?php echo e(activeHome()); ?>  ">
                <a class="nav-link" href="<?php echo e(adminUrl('')); ?>">
                  <i class="material-icons">home</i>
                  <p>لوحة التحكم</p>
                </a>
            </li>


            <li class="<?php echo e(displayBlockSetting()['active']); ?> nav-item dropdown " style="<?php echo e(checkRole(['settingIndex','tips','causes'])); ?>">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">settings</i>
                    </span>
                    <span class="nav-title"><?php echo e(trans('admin.setting')); ?></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item <?php echo e(activeOne('setting')); ?>" href="<?php echo e(route('settingIndex')); ?>" style="color: black ; <?php echo e(checkRole(['settingIndex'])); ?>" ><?php echo e(trans('admin.setting')); ?></a>
                
                <a class="dropdown-item <?php echo e(activeOne('about')); ?>" href="<?php echo e(route('aboutIndex')); ?>" style="color: black;<?php echo e(checkRole(['aboutIndex'])); ?>" >وصف الموقع</a>
              </div>
            </li>

            <li class="<?php echo e(displayBlockadProperties()['active']); ?> nav-item dropdown" style="<?php echo e(checkRole(['properties'])); ?>">

                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">settings_applications</i>
                    </span>
                    <span class="nav-title">التحكم فى المميزات</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?php echo e(activeOne('properties')); ?>" href="<?php echo e(route('properties')); ?>" style="color: black;<?php echo e(checkRole(['properties'])); ?>" >جميع المميزات</a>

                </div>
            </li>

            <li class="<?php echo e(displayBlockSochial()['active']); ?> nav-item dropdown"  style="<?php echo e(checkRole(['sochials','sochialsSectionsIndex'])); ?>">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">public</i>
                    </span>
                    <span class="nav-title">روابط التواصل </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?php echo e(activeOne('sochialsSections')); ?>" href="<?php echo e(route('sochialsSectionsIndex')); ?>" style="color: black;<?php echo e(checkRole(['sochialsSectionsIndex'])); ?>" >الأعدادات</a>
                    <a class="dropdown-item <?php echo e(activeOne('sochials')); ?>" href="<?php echo e(route('sochials')); ?>" style="color: black;<?php echo e(checkRole(['sochials'])); ?>" >روابط التواصل الأجتماعى</a>
                </div>
            </li>

            <li class="<?php echo e(displayBlockNews()['active']); ?> nav-item dropdown"  style="<?php echo e(checkRole(['news','authors','newsSectionsIndex'])); ?>">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">speaker_notes</i>
                    </span>
                    <span class="nav-title">الأخبار </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?php echo e(activeOne('newsSections')); ?>" href="<?php echo e(route('newsSectionsIndex')); ?>" style="color: black;<?php echo e(checkRole(['newsSectionsIndex'])); ?>" >الأعدادات</a>
                    <a class="dropdown-item <?php echo e(activeOne('authors')); ?>" href="<?php echo e(route('authors')); ?>" style="color: black;<?php echo e(checkRole(['authors'])); ?>" >كاتبين الأخبار</a>
                    <a class="dropdown-item <?php echo e(activeOne('news')); ?>" href="<?php echo e(route('news')); ?>" style="color: black;<?php echo e(checkRole(['news'])); ?>" >الأخبار</a>
                </div>
            </li>

            <li class="<?php echo e(displayBlockServices()['active']); ?> nav-item dropdown"  style="<?php echo e(checkRole(['services','servicesSectionsIndex'])); ?>">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">tag_faces</i>
                    </span>
                    <span class="nav-title">الخدمات </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?php echo e(activeOne('servicesSections')); ?>" href="<?php echo e(route('servicesSectionsIndex')); ?>" style="color: black;<?php echo e(checkRole(['servicesSectionsIndex'])); ?>" >الأعدادات</a>
                    <a class="dropdown-item <?php echo e(activeOne('services')); ?>" href="<?php echo e(route('services')); ?>" style="color: black;<?php echo e(checkRole(['services'])); ?>" >الخدمات</a>
                    
                </div>
            </li>

            <li class="<?php echo e(displayBlockGallerys()['active']); ?> nav-item dropdown"  style="<?php echo e(checkRole(['gallerys','gallerysSectionsIndex'])); ?>">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">add_to_photos</i>
                    </span>
                    <span class="nav-title">معرض الخصائص </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?php echo e(activeOne('gallerysSections')); ?>" href="<?php echo e(route('gallerysSectionsIndex')); ?>" style="color: black;<?php echo e(checkRole(['gallerysSectionsIndex'])); ?>" >الأعدادات</a>
                    <a class="dropdown-item <?php echo e(activeOne('gallerys')); ?>" href="<?php echo e(route('gallerys')); ?>" style="color: black;<?php echo e(checkRole(['gallerys'])); ?>" >معرض الخصائص</a>
                    
                </div>
            </li>

            <li class="<?php echo e(displayBlockManagers()['active']); ?> nav-item dropdown"  style="<?php echo e(checkRole(['managers','managersSectionsIndex'])); ?>">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">supervisor_account</i>
                    </span>
                    <span class="nav-title"> مديرين المستشفي</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?php echo e(activeOne('managersSections')); ?>" href="<?php echo e(route('managersSectionsIndex')); ?>" style="color: black;<?php echo e(checkRole(['managersSectionsIndex'])); ?>" >الأعدادات</a>
                    <a class="dropdown-item <?php echo e(activeOne('managers')); ?>" href="<?php echo e(route('managers')); ?>" style="color: black;<?php echo e(checkRole(['managers'])); ?>" >اعضاء ومديرين المستشفي</a>
                    
                </div>
            </li>

            <li class="<?php echo e(displayBlockWhychooses()['active']); ?> nav-item dropdown"  style="<?php echo e(checkRole(['whychooses','whychoosesSectionsIndex'])); ?>">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">favorite</i>
                    </span>
                    <span class="nav-title">لماذا تختار ؟ </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?php echo e(activeOne('whychoosesSections')); ?>" href="<?php echo e(route('whychoosesSectionsIndex')); ?>" style="color: black;<?php echo e(checkRole(['whychoosesSectionsIndex'])); ?>" >الأعدادات</a>
                    <a class="dropdown-item <?php echo e(activeOne('whychooses')); ?>" href="<?php echo e(route('whychooses')); ?>" style="color: black;<?php echo e(checkRole(['whychooses'])); ?>" >لماذا تختار ؟</a>
                    
                </div>
            </li>

            <li class="<?php echo e(displayBlockDoctors()['active']); ?> nav-item dropdown"  style="<?php echo e(checkRole(['doctors','sections','reservations','doctorsSectionsIndex'])); ?>">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        
                        <i class="fas fa-user-md"></i>
                    </span>
                    <span class="nav-title">الأطباء</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?php echo e(activeOne('doctorsSections')); ?>" href="<?php echo e(route('doctorsSectionsIndex')); ?>" style="color: black;<?php echo e(checkRole(['doctorsSectionsIndex'])); ?>" >الأعدادات</a>
                    <a class="dropdown-item <?php echo e(activeOne('sections')); ?>" href="<?php echo e(route('sections')); ?>" style="color: black;<?php echo e(checkRole(['sections'])); ?>" >الأقسام</a>
                    <a class="dropdown-item <?php echo e(activeOne('doctors')); ?>" href="<?php echo e(route('doctors')); ?>" style="color: black;<?php echo e(checkRole(['doctors'])); ?>" >الأطباء</a>
                    <a class="dropdown-item <?php echo e(activeOne('reservations')); ?>" href="<?php echo e(route('reservations')); ?>" style="color: black;<?php echo e(checkRole(['reservations'])); ?>" >الحجوزات</a>
                    
                </div>
            </li>

            <li class="<?php echo e(displayBlockStatistics()['active']); ?> nav-item dropdown" style="<?php echo e(checkRole(['statistics','statisticsSectionsIndex'])); ?>">

                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">settings_applications</i>
                    </span>
                    <span class="nav-title">التحكم فى الأحصائيات</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?php echo e(activeOne('statisticsSections')); ?>" href="<?php echo e(route('statisticsSectionsIndex')); ?>" style="color: black;<?php echo e(checkRole(['statisticsSectionsIndex'])); ?>" >الأعدادات</a>
                    <a class="dropdown-item <?php echo e(activeOne('statistics')); ?>" href="<?php echo e(route('statistics')); ?>" style="color: black;<?php echo e(checkRole(['statistics'])); ?>" >جميع الأحصائيات</a>

                </div>
            </li>

            <li class="<?php echo e(displayBlockOffers()['active']); ?> nav-item dropdown" style="<?php echo e(checkRole(['offers','offersSectionsIndex'])); ?>">

                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">settings_applications</i>
                    </span>
                    <span class="nav-title">التحكم فى العروض</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?php echo e(activeOne('offersSections')); ?>" href="<?php echo e(route('offersSectionsIndex')); ?>" style="color: black;<?php echo e(checkRole(['offersSectionsIndex'])); ?>" >الأعدادات</a>
                    <a class="dropdown-item <?php echo e(activeOne('offers')); ?>" href="<?php echo e(route('offers')); ?>" style="color: black;<?php echo e(checkRole(['offers'])); ?>" >جميع العروض</a>

                </div>
            </li>

            <li class="<?php echo e(displayBlockPages()['active']); ?> nav-item dropdown"  style="<?php echo e(checkRole(['pages'])); ?>">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">pages</i>
                    </span>
                    <span class="nav-title">الصفحات</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?php echo e(activeOne('pages')); ?>" href="<?php echo e(route('pages')); ?>" style="color: black;<?php echo e(checkRole(['pages'])); ?>" >جميع الصفحات</a>

                    
                </div>
            </li>

            <li class="<?php echo e(displayBlockOtherpage()['active']); ?> nav-item dropdown " style="<?php echo e(checkRole(['clinicsIndex','pharmacyIndex'])); ?>">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">settings</i>
                    </span>
                    <span class="nav-title">العيادات والصيدلية</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item <?php echo e(activeOne('clinics')); ?>" href="<?php echo e(route('clinicsIndex')); ?>" style="color: black;<?php echo e(checkRole(['clinicsIndex'])); ?>" >العيادات</a>
                <a class="dropdown-item <?php echo e(activeOne('pharmacy')); ?>" href="<?php echo e(route('pharmacyIndex')); ?>" style="color: black;<?php echo e(checkRole(['pharmacyIndex'])); ?>" >الصيدلية</a>
              </div>
            </li>

            <li class="<?php echo e(displayBlockContacts()['active']); ?> nav-item dropdown"  style="<?php echo e(checkRole(['contacts'])); ?>">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">contact_mail</i>
                    </span>
                    <span class="nav-title">رسائل اتصل بنا</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    
                    <a class="dropdown-item <?php echo e(activeOne('contacts')); ?>" href="<?php echo e(route('contacts')); ?>" style="color: black;<?php echo e(checkRole(['contacts'])); ?>" >رسائل اتصل بنا</a>
                </div>
            </li>
            <li class="<?php echo e(displayBlockOrders()['active']); ?> nav-item dropdown"  style="<?php echo e(checkRole(['orders'])); ?>">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">contact_mail</i>
                    </span>
                    <span class="nav-title">طلبات تحديد موعد</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    
                    <a class="dropdown-item <?php echo e(activeOne('orders')); ?>" href="<?php echo e(route('orders')); ?>" style="color: black;<?php echo e(checkRole(['orders'])); ?>" >طلبات تحديد موعد</a>
                </div>
            </li>
           
            <li class="<?php echo e(displayBlockUser()['active']); ?> nav-item dropdown"  style="<?php echo e(checkRole(['admins','groups'])); ?>">
                <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="has-icon">
                        <i class="material-icons">supervised_user_circle</i>
                    </span>
                    <span class="nav-title"><?php echo e(trans('admin.admins')); ?></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?php echo e(activeOne('admins')); ?>" href="<?php echo e(route('admins')); ?>" style="color: black;<?php echo e(checkRole(['admins'])); ?>" ><?php echo e(trans('admin.admins')); ?></a>

                    <a class="dropdown-item <?php echo e(activeOne('groups')); ?>" href="<?php echo e(route('groups')); ?>" style="color: black;<?php echo e(checkRole(['groups'])); ?>" ><?php echo e(trans('admin.groups')); ?></a>
                </div>
            </li>

          

          
          
        </ul>
      </div>
    </div>
