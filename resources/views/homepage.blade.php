@extends('home')
@section('content')
<div class="mainSection">
    <div class="secHolder">
        <div class="topBlock">
            <img src="@if(!empty(setting())){{ Storage::url(setting()['about_home_img']) }} @endif" alt="Hassan" class="fadeInLeft animated">
            <div class="text bounceInLeft animated">
                <div class="container">
                    @if(!empty(setting())){!! setting()['about_home_text_'.lang()] !!} @endif
                </div>
            </div>
        </div>
        <div class="row bottomBlock nomargin">
            @foreach(\App\Ad_propertie::all() as $propertie)
            <div class="col-12 col-md-6 col-lg-4 blockItem">
                <div class="itemIcon">
                    <img src="{{ Storage::url($propertie['img']) }}" alt="24 Hours Service">
                </div>
                <div class="itemText">
                    <h2>{{ $propertie['title_'.lang()] }}</h2>
                    <p>{{ $propertie['desc_'.lang()] }}</p>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
@if(setting()['section_about_show_home'] == 'yes')
<section class="welcomeSec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="secTitle text-center">{{ setting()['about_title_'.lang()] }}<span class="subText upper">@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif</span></h2>
                <p class="secDesc text-center">{{ setting()['about_desc_'.lang()] }}</p>
            </div>
        </div>
        <div class="row textHolder">
            <p class="col-12">{{ setting()['about_p1_'.lang()] }}</p>
            <p class="col-12 col-lg-6">{{ setting()['about_p2_'.lang()] }}</p>
            <p class="col-12 col-lg-6">{{ setting()['about_p3_'.lang()] }}</p>
        </div>
    </div>
</section>
@endif
<section class="blocks">
    <div class="container">
        <div class="row">
            @if(sectionSetting(2)['show_home'] == 1)
            <div class="col-12 col-lg-8">
                <div class="block latestNews">
                    <div class="blockTitle">
                        <h2>{{ sectionSetting(2)['title_'.lang()] }}<span class="subText upper">@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif</span></h2>
                    </div>
                    <p class="blockDesc">{{ sectionSetting(2)['desc_'.lang()] }}</p>
                    <div class="row">
                        @foreach(\App\News::where('active',1)->orderBy('id','desc')->limit(4)->get() as $news)
                        <div class="col-12 col-md-6">
                            <div class="postItem">
                                <div class="postIMG">
                                    <a href="{{ url('/blog/'.$news['id'].'?blog='.$news['title_'.lang()]) }}">
                                        <img src="{{ Storage::url($news['img']) }}" alt="Post title here">
                                    </a>
                                </div>
                                <h3 class="postTitle"><a href="{{ url('/blog/'.$news['id'].'?blog='.$news['title_'.lang()]) }}">{{ $news['title_'.lang()] }}</a></h3>
                                <div class="postDetails">
                                    <span class="date">{{ $news['month_name_'.lang()] }} {{ $news['year'] }}</span><span class="by">{{ trans('admin.newsBy') }}<span class="username">{{ \App\Author::find($news['author_id'])['name_'.lang()] }}</span></span>
                                </div>
                                <p class="postexerpt">{!! str_limit($news['content_'.lang()], $limit = 150, $end = '...')  !!}</p>
                                <a href="{{ url('/blog/'.$news['id'].'?blog='.$news['title_'.lang()]) }}" class="primaryButton">{{ trans('admin.more') }}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            
            <div class="col-12 col-lg-4 sideBar">
                @if(sectionSetting(3)['show_home'] == 1)
                <div class="block">
                    <div class="blockTitle">
                        <h2><span class="subText">{{ sectionSetting(3)['title_'.lang()] }}</span></h2>
                        <p class="blockDesc">{{ sectionSetting(3)['desc_'.lang()] }}</p>
                    </div>
                    <div class="accordionBlock">
                        <?php $count3 = 1 ;?>
                        @foreach(\App\Service::where('active',1)->orderBy('id','desc')->limit(5)->get() as $service)
                        <div class="accordionItem">
                            <div class="accordionTitle @if($count3 == 1) active @endif">
                                <h3>{{ $service['title_'.lang()] }}<i class="fas fa-plus"></i></h3>
                            </div>
                            <div class="accordionContent" @if($count3 == 1) style="display: block;" @else style="display: none;"  @endif>
                                <p>{!! str_limit($service['desc_'.lang()], $limit = 90, $end = '...')  !!}</p>
                                <a href="{{ url('/services?service='.$service['title_'.lang()]) }}" class="primaryButton">{{ trans('admin.more') }}</a>
                            </div>
                        </div>
                        <?php $count3++ ;?>
                        @endforeach
                    </div>
                </div>
                @endif
                @if(sectionSetting(4)['show_home'] == 1)
                <div class="block">
                    <div class="blockTitle">
                        <h2>{{ sectionSetting(4)['title_'.lang()] }}</h2>
                        <p class="blockDesc">{{ sectionSetting(4)['desc_'.lang()] }}</p>
                    </div>
                    <div class="gallerySlider">
                        <div class="owl-carousel">
                            @foreach(\App\Gallery::where('active',1)->orderBy('id','desc')->limit(10)->get() as $gallery)
                            <div class="item">
                                <div class="IMG">
                                    <img src="{{ Storage::url($gallery['img']) }}" alt="Photo Title">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@if(sectionSetting(5)['show_home'] == 1)
<section class="testimonials">
    <div class="owl-carousel">
        @foreach(\App\Manager::where('active',1)->get() as $manager)
        <div class="item">
            <div class="container">
                <div class="testimonialIMG">
                    <img src="{{ Storage::url($manager['img']) }}" alt="Person">
                </div>
                <div class="testimonialText text-center">
                    <p>{{ $manager['content_'.lang()] }}</p>
                    <div class="personName">{{ $manager['name_'.lang()] }}</div>
                    <div class="jobTitle">{{ $manager['job_'.lang()] }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif
@if(sectionSetting(6)['show_home'] == 1)
<section class="whyChoose">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="secTitle text-center">{{ sectionSetting(6)['title_'.lang()] }}<span class="subText upper">@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif</span></h2>
                <p class="secDesc text-center">{{ sectionSetting(6)['desc_'.lang()] }}</p>
            </div>
            @foreach(\App\Whychoose::where('active',1)->orderBy('id','desc')->limit(6)->get() as $whychoose)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="reasonItem">
                    <div class="reasonIcon">
                        <i class="{{ $whychoose['icon'] }}"></i>
                    </div>
                    <div class="resonText">
                        <h3>{{ $whychoose['title_'.lang()] }}</h3>
                        <p>{!! $whychoose['content_'.lang()] !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@if(sectionSetting(7)['show_home'] == 1)
<section class="meetDoctors">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="secTitle text-center">{{ sectionSetting(7)['title_'.lang()] }}<span class="subText">{{ trans('admin.our_doctors') }}</span></h2>
                <p class="secDesc text-center">{{ sectionSetting(7)['desc_'.lang()] }}</p>
            </div>
            @foreach(\App\Doctor::where('active',1)->limit(4)->get() as $doctor)
            <div class="col-12 col-md-6 col-xl-3">
                <div class="doctorHolder">
                    <div class="doctorIMG">
                        <a href="doctor-ar.html"><img src="{{ Storage::url($doctor['img']) }}" alt="Doctor Name"></a>
                    </div>
                    <div class="doctorText text-center">
                        <h3 class="upper"><a href="{{ url('/doctor/'.$doctor['id'].'?doctor='.$doctor['name_'.lang()]) }}">{{ $doctor['name_'.lang()] }}<i class="fas fa-plus"></i></a></h3>
                        <p>{{ str_limit($doctor['desc_'.lang()], $limit = 100, $end = '...')  }}</p>
                        <a href="{{ url('/doctor/'.$doctor['id'].'?doctor='.$doctor['name_'.lang()]) }}" class="primaryButton">{{ trans('admin.more') }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@if(sectionSetting(8)['show_home'] == 1)
<section class="statistics">
    <div class="container">
        <div class="row">
            @foreach(\App\Statistic::where('active',1)->limit(4)->get() as $statistic)
            <div class="col-6 col-md-3">
                <div class="statistic text-center">
                    <div class="IMG">
                        <img src="{{ Storage::url($statistic['img']) }}" alt="Statistic Here">
                    </div>
                    <div class="count">{{ $statistic['count_num'] }}</div>
                    <div class="title upper">{{ $statistic['name_'.lang()] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<section class="callToAction">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-12 col-lg-9 text-center">
                <span class="text">{{ trans('admin.offers_s') }}</span>
            </div>
            <div class="col-12 col-lg-3 text-center">
                <a href="{{ url('/offers') }}" class="primaryButton upper action">{{ trans('admin.more') }}</a>
            </div>
        </div>
    </div>
</section>
@endsection