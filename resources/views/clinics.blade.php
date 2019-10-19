@extends('home')
@section('content')
    <div class="page">
        <div class="pageTitle">
            <div class="container">
                <h1>{{ $title }}</h1>
                <p>{{ $description }}</p>
            </div>
        </div>
        <section class="ourMession">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-12 col-lg-8 missionText">
                        <h2>{{ $data['p1_title_'.lang()] }}</h2>
                        <p>{!! $data['p1_content_'.lang()] !!}</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="imgHolder">
                            <div class="IMG">
                                <img src="{{ Storage::url($data['p1_img']) }}" alt="Our Mission">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="insurance">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-12 col-lg-3">
                        <div class="imgHolder">
                            <div class="IMG">
                                <img src="{{ Storage::url($data['p2_img']) }}" alt="Insurance">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <h2>{{ $data['p2_title_'.lang()] }}</h2>
                        <p>{!! $data['p2_content_'.lang()] !!}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="ourServices">
            <div class="container">
                <h2>{{ sectionSetting(3)['title_'.lang()] }}</h2>
                <div class="row nomargin">
                    @foreach(\App\Service::where('active',1)->limit(3)->get() as $service)
                    <div class="col-12 col-md-6 col-lg-4 serviceParent">
                        <div class="serviceHolder">
                            <div class="title">{{ $service['title_'.lang()] }}</div>
                            <p>{!! str_limit($service['desc_'.lang()], $limit = 200, $end = '...') !!}</p>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <section class="ourDoctors">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 doctorsText">
                        <h2 class="megaTitle">{{ $data['p3_title_'.lang()] }}<span class="subText">{{ trans('admin.our_doctors') }}</span></h2>
                        <p>{!! $data['p3_content_'.lang()] !!}</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="imgHolder">
                            <div class="IMG">
                                <img src="{{ Storage::url($data['p3_img']) }}" alt="Our Mission">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection