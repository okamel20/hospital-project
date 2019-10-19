<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(url('/public/dark')); ?>/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php if(!empty(setting())): ?><?php echo e(Storage::url(setting()['app_logo'])); ?> <?php endif; ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?php if(!empty(setting())): ?><?php echo e(setting()['app_name_'.lang()]); ?> <?php endif; ?> | <?php echo e(trans('admin.Dashboard')); ?>

  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
  />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
  />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <!-- Markazi Text font include just for persian demo purpose, don't include it in your project -->
  <link href="https://fonts.googleapis.com/css?family=Cairo&amp;subset=arabic" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?php echo e(url('/public/dark')); ?>/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link href="<?php echo e(url('/public/dark')); ?>/css/material-dashboard-rtl.css?v=1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo e(url('/public/dark')); ?>/demo/demo.css" rel="stylesheet" />
  <link href="<?php echo e(url('/public/admin')); ?>/vendor/chartist/css/chartist.min.css" rel="stylesheet" />
  <link href="<?php echo e(url('/public/admin')); ?>/vendor/chartist/css/chartist-custom.css" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo e(url('/public/admin')); ?>/fonts/icomoon/icomoon.css" />

  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4 {
      font-family: "Cairo";
    }
  </style>
</head>

<body class="dark-edition">
  <div class="wrapper ">