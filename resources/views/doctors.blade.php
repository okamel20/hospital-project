@extends('home')
@section('content')
     <div class="page offersPage">
        <section class="pageHeading" style="background-image: url({{ url('/public/web') }}/img/offers-header.jpg);">
            <div class="pageHeadingText">
                <h1>{{ $title }}</h1>
                <p>{{ $description }}</p>
            </div>
        </section>
        <section class="doctors">
            <div class="container">
                <ul class="nav nav-tabs">
                    <?php $count = 1 ;?>
                    @foreach(\App\Section::where('active',1)->get() as $section)
                    <li class="nav-item">
                        <a class="nav-link @if($count == 1) active @endif" data-toggle="tab" href="#the{{ $section['id'] }}"><h2>{{ $section['name_'.lang()] }}</h2></a>
                    </li>
                    <?php $count++ ;?>
                    @endforeach
                </ul>
                <div class="tab-content">
                    <?php $count2 = 1 ;?>
                    @foreach(\App\Section::where('active',1)->get() as $section)
                    <div class="tab-pane @if($count2 == 1) active @endif" id="the{{ $section['id'] }}">
                        <div class="row">
                            @foreach(\App\Doctor::where('active',1)->where('section_id',$section['id'])->get() as $doctor)
                            <div class="col-12 col-md-6 col-lg-4 bounceInUp animated">
                                <div class="doctor text-center">
                                    <div class="docImg">
                                        <div class="IMG">
                                            <a href="{{ url('/doctor/'.$doctor['id'].'?doctor='.$doctor['name_'.lang()]) }}"><img src="{{ Storage::url($doctor['img']) }}" alt="{{ $doctor['name_'.lang()] }}"></a>
                                        </div>
                                    </div>
                                    <div class="docText">
                                        <h3 class="docName"><a href="{{ url('/doctor/'.$doctor['id'].'?doctor='.$doctor['name_'.lang()]) }}">{{ $doctor['name_'.lang()] }}</a></h3>
                                        <div class="docJob">{{ $doctor['job_'.lang()] }}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <?php $count2++ ;?>
                    @endforeach
                    
                </div>
            </div>
        </section>
    </div>
@endsection