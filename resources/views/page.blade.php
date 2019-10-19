@extends('home')
@section('content')
     <div class="page">
        <section class="pageHeading" style="background-image: url({{ url('public/web') }}/img/about-heading.jpg);">
            <div class="pageHeadingText">
                <h1>{{ $title }}</h1>
                <p>{!! $page['desc_'.lang()] !!}</p>
            </div>
        </section>
        <section class="pageContent">
            <div class="container">
                <p class="firstWordSpan">{!! $page['content_'.lang()] !!}</p>
            </div>
        </section>
    </div>
@endsection