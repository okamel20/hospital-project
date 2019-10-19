@extends('home')
@section('content')
   <div class="page">
        <section class="pageHeading" style="background-image: url({{ url('public/web') }}/img/services-header.jpg);">
            <div class="pageHeadingText">
                <h1>{{ $title }}</h1>
                <p>{{ $description }}</p>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <div class="row">
                    @foreach(\App\Service::where('active',1)->get() as $service)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="aService">
                            <div class="seviceIcon">
                                <a >
                                    <img src="{{ Storage::url($service['img']) }}"  height="70px" alt="{{ $service['title_'.lang()] }}">
                                </a>
                            </div>
                            <h2 class="serviceTitle"><a >{{ $service['title_'.lang()] }}</a></h2>
                            <p>{!! $service['desc_'.lang()] !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="bookingService">
            <div class="container">
                <h2>{{ trans('admin.want_to') }}</h2>
                <p>{{ trans('admin.want_to2') }}</p>
                <a href="{{ url('/contact') }}" class="button white">{{ trans('admin.contact2') }}</a>
            </div>
        </section>
    </div>
@endsection