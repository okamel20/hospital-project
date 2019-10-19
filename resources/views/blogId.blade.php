@extends('home')
@section('content')
    <div class="page">
            <div class="article">
            <div class="pageTitle">
                <div class="container">
                    <h1>{{ $data['title_'.lang()] }}</h1>
                </div>
            </div>
            <article>
                <div class="container">
                    <div class="articleImage">
                        <div class="IMG">
                            <img src="{{ Storage::url($data['img']) }}" alt="Post Title Here">
                        </div>
                    </div>
                    <div class="articleContent">
                        <p>{!! $data['content_'.lang()] !!}</p>
                    </div>
                </div>
            </article>
        </div>
        <section class="moreArticles posts">
            <div class="container">
                <h2>مقالات اخرى</h2>
                <div class="row">
                    @foreach(\App\News::where('active',1)->orderBy('id','desc')->where('id','!=',$data['id'])->get() as $news)
                    <div class="col-12 col-lg-4">
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