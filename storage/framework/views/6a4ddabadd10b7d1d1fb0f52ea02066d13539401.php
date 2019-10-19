<!DOCTYPE html>
<html lang="<?php echo e(lang()); ?>" dir="<?php echo e(direction()); ?>">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Eng. A7meD KaMeL - a-kamel.com - 01003510901">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php if(!empty(setting())): ?><?php echo e(setting()['app_name_'.lang()]); ?> <?php endif; ?> | <?php echo e($title); ?> </title>
    <meta name="description" content="<?php if(!empty(setting())): ?><?php echo e(setting()['app_name_'.lang()]); ?> <?php endif; ?>">
    <link rel="icon" href="<?php if(!empty(setting())): ?><?php echo e(Storage::url(setting()['app_logo'])); ?> <?php endif; ?>">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(url('/public/web')); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <?php if(lang() == 'en'): ?>
    <link rel="stylesheet" href="<?php echo e(url('/public/web')); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo e(url('/public/web')); ?>/css/media.css">
    <?php else: ?>
    <link rel="stylesheet" href="<?php echo e(url('/public/web')); ?>/css/style-rtl.css">
    <link rel="stylesheet" href="<?php echo e(url('/public/web')); ?>/css/media-rtl.css">
    <?php endif; ?>

    <!-- JS Files -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo e(url('/public/web')); ?>/js/owl.carousel.min.js"></script>
    <!--[if lt IE 9]>
    <script type='text/javascript' src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js?ver=5.1.1'></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script type='text/javascript' src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js?ver=5.1.1'></script>
    <![endif]-->
</head>
<body>
    <header class="mainHeader">
        <div class="topBar">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <?php if(sectionSetting(1)['show_home'] == 1): ?>
                        <div class="socialButtons">
                            <?php $__currentLoopData = \App\Social_link::where('active',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="">
                                <a href="<?php echo e($social['link']); ?>" title=""><i class="<?php echo e($social['icon']); ?>"></i></a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-md-7 info">
                        <div class="mail">
                            <a href="mailto:<?php if(!empty(setting())): ?><?php echo e(setting()['email']); ?> <?php endif; ?>"><?php if(!empty(setting())): ?><?php echo e(setting()['email']); ?> <?php endif; ?></a>
                        </div>
                        <div class="contactInfo">
                            <span><?php echo e(trans('admin.mobile')); ?> : </span><?php if(!empty(setting())): ?><?php echo e(setting()['phone']); ?> <?php endif; ?>
                        </div>
                        <div class="langSwitch" >
                            <select name="language-select" id="langSelect" class="langSelect" style="background-color: #266083;color: #fff;outlin: 0;border: 1px solid rgba(255, 255, 255, 0.35) ;">
                                <option value="ar" <?php if(lang() == 'ar'): ?> selected <?php endif; ?>><?php echo e(trans('admin.arabic')); ?></option>
                                <option value="en" <?php if(lang() == 'en'): ?> selected <?php endif; ?>><?php echo e(trans('admin.english')); ?></option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <nav class="siteNav">
        <div class="container">
            <div class="row">
                <div class="col-3 logo">
                    <div class="logoHolder text-center">
                        <img src="<?php if(!empty(setting())): ?><?php echo e(Storage::url(setting()['app_logo'])); ?> <?php endif; ?>" alt="<?php if(!empty(setting())): ?><?php echo e(setting()['app_name_'.lang()]); ?> <?php endif; ?>">
                    </div>
                </div>
                <div class="col-9 mainMenu">
                    <div class="mainMenuButton">
                        <div class="buttonHolder">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </div>
                    <ul>
                        <li class="menuItem <?php if(Request::url() == url('/')): ?> active <?php endif; ?>">
                            <a href="<?php echo e(url('/')); ?>">
                                <div class="itemIcon">
                                    <i class="fas fa-hotel"></i>
                                </div>
                                <div class="itemText"><?php echo e(trans('web.Home')); ?></div>
                            </a>
                        </li>
                        <li class="menuItem <?php if(Request::url() == url('/doctors')): ?> active <?php endif; ?>">
                            <a href="<?php echo e(url('/doctors')); ?>">
                                <div class="itemIcon">
                                    <i class="fas fa-user-md"></i>
                                </div>
                                <div class="itemText"><?php echo e(trans('admin.doctors')); ?></div>
                            </a>
                        </li>
                        <li class="menuItem <?php if(Request::url() == url('/blog')): ?> active <?php endif; ?>">
                            <a href="<?php echo e(url('/blog')); ?>">
                                <div class="itemIcon">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="itemText"><?php echo e(trans('admin.blog')); ?></div>
                            </a>
                        </li>
                        <li class="menuItem <?php if(Request::url() == url('/services')): ?> active <?php endif; ?>">
                            <a href="<?php echo e(url('/services')); ?>">
                                <div class="itemIcon">
                                    <i class="fas fa-stethoscope"></i>
                                </div>
                                <div class="itemText"><?php echo e(trans('admin.services')); ?></div>
                            </a>
                        </li>
                        <li class="menuItem <?php if(Request::url() == url('/clinics')): ?> active <?php endif; ?>">
                            <a href="<?php echo e(url('/clinics')); ?>">
                                <div class="itemIcon">
                                    <i class="fas fa-syringe"></i>
                                </div>
                                <div class="itemText"><?php echo e(trans('admin.clinics')); ?></div>
                            </a>
                        </li>
                        <li class="menuItem <?php if(Request::url() == url('/offers')): ?> active <?php endif; ?>">
                            <a href="<?php echo e(url('/offers')); ?>">
                                <div class="itemIcon">
                                    <i class="fas fa-file-contract"></i>
                                </div>
                                <div class="itemText"><?php echo e(trans('admin.offers')); ?></div>
                            </a>
                        </li>
                        
                        <li class="menuItem <?php if(Request::url() == url('/pharmacy')): ?> active <?php endif; ?>">
                            <a href="<?php echo e(url('/pharmacy')); ?>">
                                <div class="itemIcon">
                                    <i class="fas fa-capsules"></i>
                                </div>
                                <div class="itemText"><?php echo e(trans('admin.pharmacy')); ?></div>
                            </a>
                        </li>
                        <?php $__currentLoopData = \App\Page::where('active',1)->where('type','mnue')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pageMnue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="menuItem <?php if(Request::url() == url('/page/'.$pageMnue['id'])): ?> active <?php endif; ?>">
                            <a href="<?php echo e(url('/page/'.$pageMnue['id'])); ?>">
                                <div class="itemIcon">
                                    <i class="fas fa-comment-dots"></i>
                                </div>
                                <div class="itemText"><?php echo e($pageMnue['title_'.lang()]); ?></div>
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="menuItem <?php if(Request::url() == url('/contact')): ?> active <?php endif; ?>">
                            <a href="<?php echo e(url('/contact')); ?>">
                                <div class="itemIcon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="itemText"><?php echo e(trans('admin.contact')); ?></div>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </nav>