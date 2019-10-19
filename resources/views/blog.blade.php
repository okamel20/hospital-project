@extends('home')
@section('content')
    <div class="page">
        <div class="pageTitle">
            <div class="container">
                <h1>{{ $title }}</h1>
                <p>{{ $description }}</p>
            </div>
        </div>
        <section class="posts">
            <div class="container">
                <div class="row">
                    <!-- First Post -->
                    @foreach(\App\News::where('active',1)->orderBy('id','desc')->limit(1)->get() as $news)
                    <div class="col-12">
                        <div class="row flex-xl-row-reverse">
                            <div class="col-12 col-xl-7">
                                <div class="postImage">
                                    <div class="IMG">
                                        <a href="{{ url('/blog/'.$news['id'].'?blog='.$news['title_'.lang()]) }}"><img src="{{ Storage::url( $news['img']) }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-5">
                                <div class="postText">
                                    <h2>{{ $news['title_'.lang()] }}</h2>
                                    <p>{!! str_limit($news['content_'.lang()], $limit = 100, $end = '...') !!}</p>
                                    <a href="{{ url('/blog/'.$news['id'].'?blog='.$news['title_'.lang()]) }}" class="primaryButton more">{{ trans('admin.more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Other Posts -->
                    @foreach(\App\News::where('active',1)->orderBy('id','desc')->skip(1)->take(50)->get() as $news)
                    <div class="col-12 col-lg-6">
                        <div class="postImage">
                            <div class="IMG">
                                <a href="{{ url('/blog/'.$news['id'].'?blog='.$news['title_'.lang()]) }}"><img src="{{ Storage::url( $news['img']) }}" alt=""></a>
                            </div>
                        </div>
                        <div class="postText">
                            <h2>{{ $news['title_'.lang()] }}</h2>
                            <p>{!! str_limit($news['content_'.lang()], $limit = 100, $end = '...') !!}</p>
                            <a href="{{ url('/blog/'.$news['id'].'?blog='.$news['title_'.lang()]) }}" class="primaryButton more">{{ trans('admin.more') }}</a>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
    </div>
@endsection