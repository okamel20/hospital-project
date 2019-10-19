@extends('home')
@section('content')
   <div class="page offersPage">
        <section class="pageHeading" style="background-image: url({{ url('public/web') }}/img/offers-header.jpg);">
            <div class="pageHeadingText">
                <h1>{{ $title }}</h1>
                <p>{{ $description }}</p>
            </div>
        </section>
        <section class="offers">
            <div class="container">
                <div class="row">
                    @foreach(\App\Offer::where('active',1)->get() as $offer)
                    <div class="col-12 col-lg-4">
                        <div class="anOffer">
                            <div class="discount">
                                <div class="percentage">{{ $offer['sale'] }} %</div>
                                <div class="discTitle">خصم</div>
                            </div>
                            <div class="offerIcon">
                                <a >
                                    <img src="{{ Storage::url($offer['img']) }}" height="70px">
                                </a>
                            </div>
                            <h2 class="offerTitle"><a >{{ $offer['title_'.lang()] }}</a></h2>
                            <p>{{ $offer['desc_'.lang()] }}</p>
                            <a href="{{ url('/contact') }}" class="button">{{ trans('admin.buy') }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection