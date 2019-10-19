<footer class="mainFooter">
        <div class="container">
            <div class="topFooter">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footerBlock">
                            <h2 class="title">{{ trans('admin.keep_in_touch') }}</h2>
                            <div class="contactInfo">
                                <div class="infoItem">
                                    <div class="infoIcon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="infoText">
                                        <p><a href="mailto:@if(!empty(setting())){{ setting()['email'] }} @endif">@if(!empty(setting())){{ setting()['email'] }} @endif</a></p>
                                        <p><a href="mailto:@if(!empty(setting())){{ setting()['email'] }} @endif">@if(!empty(setting())){{ setting()['email'] }} @endif</a></p>
                                    </div>
                                </div>
                                <div class="infoItem">
                                    <div class="infoIcon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="infoText">
                                        <p class="ltr"><a href="tel:@if(!empty(setting())){{ setting()['phone'] }} @endif">@if(!empty(setting())){{ setting()['phone'] }} @endif</a></p>
                                        <p class="ltr"><a href="tel:@if(!empty(setting())){{ setting()['phone'] }} @endif">@if(!empty(setting())){{ setting()['phone'] }} @endif</a></p>
                                    </div>
                                </div>
                                <div class="infoItem">
                                    <div class="infoIcon">
                                        <i class="fas fa-map-marked-alt"></i>
                                    </div>
                                    <div class="infoText">
                                        <p>@if(!empty(setting())){{ setting()['address_'.lang()] }} @endif</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2 offset-lg-1">
                        <div class="footerBlock">
                            <h2 class="title">{{ trans('admin.quick_links') }}</h2>
                            <ul class="footerLinks">
                                @foreach(\App\Page::where('active',1)->where('type','links')->limit(4)->get() as $pageMnue)
                                <li><i class="fas fa-caret-right"></i><a href="{{ url('/page/'.$pageMnue['id']) }}">{{ $pageMnue['title_'.lang()] }}</a></li>
                                @endforeach
                                <li><i class="fas fa-caret-right"></i>
                                    <a href="{{ url('/doctors') }}">
                                        {{ trans('admin.doctors') }}
                                    </a>
                                </li>
                                <li><i class="fas fa-caret-right"></i>
                                    <a href="{{ url('/blog') }}">
                                        {{ trans('admin.blog') }}
                                    </a>
                                </li>
                                <li><i class="fas fa-caret-right"></i>
                                    <a href="{{ url('/services') }}">
                                        {{ trans('admin.services') }}
                                    </a>
                                </li>
                                <li><i class="fas fa-caret-right"></i>
                                    <a href="{{ url('/clinics') }}">
                                        {{ trans('admin.clinics') }}
                                    </a>
                                </li>
                                <li><i class="fas fa-caret-right"></i>
                                    <a href="{{ url('/offers') }}">
                                        {{ trans('admin.offers') }}
                                    </a>
                                </li>
                                <li><i class="fas fa-caret-right"></i>
                                    <a href="{{ url('/pharmacy') }}">
                                        {{ trans('admin.pharmacy') }}
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footerBlock">
                            <h2 class="title">{{ trans('admin.services') }}</h2>
                            <ul class="footerLinks">
                                @foreach(\App\Service::where('active',1)->orderBy('id','desc')->limit(6)->get() as $service)
                                <li><i class="fas fa-caret-right"></i><a href="{{ url('/services') }}">{{ $service['title_'.lang()] }}</a></li>
                                @endforeach
                            </ul>
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
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footerBlock">
                            <h2 class="title">{{ trans('admin.select_a_date') }}</h2>
                            <form action="{{ url('/orders') }}" method="post" class="footerContact" id="footerContact">
                                {{ csrf_field() }}
                                <input type="text" name="name" id="yourName" placeholder="{{ trans('admin.name') }}">
                                <input type="number" name="phone" id="yourMobile" placeholder="{{ trans('admin.mobile') }}">
                                <textarea name="msg" id="yourMessage" placeholder="{{ trans('admin.msg') }}"></textarea>
                                <div class="email-submit">
                                    <input type="email" name="email" id="yourEmail" class="darkInput" placeholder="{{ trans('admin.email') }}">
                                    <input type="submit" value="{{ trans('admin.go') }}" class="primaryButton submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottomBar">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="copyRights">
                            <p>@if(!empty(setting())){{ setting()['copy_rights_'.lang()] }} @endif</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="inlineLinks">
                            @foreach(\App\Page::where('active',1)->where('type','footer')->get() as $pageFooter)
                            <a href="{{ url('/page/'.$pageFooter['id'].'?page='.$pageFooter['title_'.lang()]) }}">{{ $pageFooter['title_'.lang()] }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @if(lang() == 'ar')
    <script src="{{url('/public/web')}}/js/main-rtl.js"></script>
    @else
    <script src="{{url('/public/web')}}/js/main.js"></script>
    @endif
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(!empty(Session::get('save')))
        <script type="text/javascript">
            swal("{{ trans('admin.success') }}", "{{ Session::get('save') }}", "success");
        </script>
    @endif
    <script type="text/javascript">
        $('.langSelect').change(function(event) {
            var langChange = $('.langSelect').val();
            var url = "{{ url('/lang') }}"+"/"+langChange;
            window.location.href=url;
        });
    </script>
    @yield('script')
</body>
</html>