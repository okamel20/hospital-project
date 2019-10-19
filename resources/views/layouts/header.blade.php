<!DOCTYPE html>
<html lang="{{ lang() }}" dir="{{ direction() }}">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Eng. A7meD KaMeL - a-kamel.com - 01003510901">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif | {{ $title }} </title>
    <meta name="description" content="@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif">
    <link rel="icon" href="@if(!empty(setting())){{ Storage::url(setting()['app_logo']) }} @endif">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/public/web')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    @if(lang() == 'en')
    <link rel="stylesheet" href="{{url('/public/web')}}/css/style.css">
    <link rel="stylesheet" href="{{url('/public/web')}}/css/media.css">
    @else
    <link rel="stylesheet" href="{{url('/public/web')}}/css/style-rtl.css">
    <link rel="stylesheet" href="{{url('/public/web')}}/css/media-rtl.css">
    @endif

    <!-- JS Files -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{url('/public/web')}}/js/owl.carousel.min.js"></script>
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
                        @if(sectionSetting(1)['show_home'] == 1)
                        <div class="socialButtons">
                            @foreach(\App\Social_link::where('active',1)->get() as $social)
                            <div class="">
                                <a href="{{ $social['link'] }}" title=""><i class="{{ $social['icon'] }}"></i></a>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <div class="col-12 col-md-7 info">
                        <div class="mail">
                            <a href="mailto:@if(!empty(setting())){{ setting()['email'] }} @endif">@if(!empty(setting())){{ setting()['email'] }} @endif</a>
                        </div>
                        <div class="contactInfo">
                            <span>{{ trans('admin.mobile') }} : </span>@if(!empty(setting())){{ setting()['phone'] }} @endif
                        </div>
                        <div class="langSwitch" >
                            <select name="language-select" id="langSelect" class="langSelect" style="background-color: #266083;color: #fff;outlin: 0;border: 1px solid rgba(255, 255, 255, 0.35) ;">
                                <option value="ar" @if(lang() == 'ar') selected @endif>{{ trans('admin.arabic') }}</option>
                                <option value="en" @if(lang() == 'en') selected @endif>{{ trans('admin.english') }}</option>
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
                        <img src="@if(!empty(setting())){{ Storage::url(setting()['app_logo']) }} @endif" alt="@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif">
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
                        <li class="menuItem @if(Request::url() == url('/')) active @endif">
                            <a href="{{ url('/') }}">
                                <div class="itemIcon">
                                    <i class="fas fa-hotel"></i>
                                </div>
                                <div class="itemText">{{ trans('web.Home') }}</div>
                            </a>
                        </li>
                        <li class="menuItem @if(Request::url() == url('/doctors')) active @endif">
                            <a href="{{ url('/doctors') }}">
                                <div class="itemIcon">
                                    <i class="fas fa-user-md"></i>
                                </div>
                                <div class="itemText">{{ trans('admin.doctors') }}</div>
                            </a>
                        </li>
                        <li class="menuItem @if(Request::url() == url('/blog')) active @endif">
                            <a href="{{ url('/blog') }}">
                                <div class="itemIcon">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="itemText">{{ trans('admin.blog') }}</div>
                            </a>
                        </li>
                        <li class="menuItem @if(Request::url() == url('/services')) active @endif">
                            <a href="{{ url('/services') }}">
                                <div class="itemIcon">
                                    <i class="fas fa-stethoscope"></i>
                                </div>
                                <div class="itemText">{{ trans('admin.services') }}</div>
                            </a>
                        </li>
                        <li class="menuItem @if(Request::url() == url('/clinics')) active @endif">
                            <a href="{{ url('/clinics') }}">
                                <div class="itemIcon">
                                    <i class="fas fa-syringe"></i>
                                </div>
                                <div class="itemText">{{ trans('admin.clinics') }}</div>
                            </a>
                        </li>
                        <li class="menuItem @if(Request::url() == url('/offers')) active @endif">
                            <a href="{{ url('/offers') }}">
                                <div class="itemIcon">
                                    <i class="fas fa-file-contract"></i>
                                </div>
                                <div class="itemText">{{ trans('admin.offers') }}</div>
                            </a>
                        </li>
                        
                        <li class="menuItem @if(Request::url() == url('/pharmacy')) active @endif">
                            <a href="{{ url('/pharmacy') }}">
                                <div class="itemIcon">
                                    <i class="fas fa-capsules"></i>
                                </div>
                                <div class="itemText">{{ trans('admin.pharmacy') }}</div>
                            </a>
                        </li>
                        @foreach(\App\Page::where('active',1)->where('type','mnue')->get() as $pageMnue)
                        <li class="menuItem @if(Request::url() == url('/page/'.$pageMnue['id'])) active @endif">
                            <a href="{{ url('/page/'.$pageMnue['id']) }}">
                                <div class="itemIcon">
                                    <i class="fas fa-comment-dots"></i>
                                </div>
                                <div class="itemText">{{ $pageMnue['title_'.lang()] }}</div>
                            </a>
                        </li>
                        @endforeach
                        <li class="menuItem @if(Request::url() == url('/contact')) active @endif">
                            <a href="{{ url('/contact') }}">
                                <div class="itemIcon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="itemText">{{ trans('admin.contact') }}</div>
                            </a>
                        </li>
                        {{-- <li class="menuItem  redItem">
                            <a href="#">
                                <i class="fas fa-plus"></i>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </nav>