@extends('home')
@section('content')
    
    <section class="bg-accent-shadow-body s-space-bottom-full-single">
        @include('layouts.headerPage')
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="gradient-wrapper mb--sm">
                        <div class="gradient-title">
                            <h2>تسجيل عضوية جديده</h2>
                        </div>
                        <div class="input-layout1 gradient-padding">
                            @include('layouts.msg')
                            {!! Form::open(['url'=>url('signup'),'files'=>true , 'method' => 'POST' , 'id' => 'login-page-form' , 'class' => 'normalForm']) !!}
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label possition-top" for="first-name">نوع العضويه
                                            <span>*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="inlineRadio1" value="1"
                                                       name="type" @if(old('type') == 1) checked="" @elseif(!old('type')) checked=""  @endif onclick="personal();">
                                                <label for="inlineRadio1">فرد</label>
                                            </div>
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="inlineRadio2" value="2"
                                                       name="type" @if(old('type') == 2) checked="" @endif onclick="company();">
                                                <label for="inlineRadio2"> تاجر </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="user-name">اسم المستخدم <span>*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input type="text" id="user-name" class="form-control"
                                                   placeholder="اسم المستخدم" name="first_name" required="" value="{{ old('first_name') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="user-name">الدوله <span>*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div id="cp-search-form">
                                            <div class="form-group search-input-area input-icon-location">
                                                <select id="location" class="select2 countrySelects" name="country_id" required="">
                                                    @foreach(\App\Country::where('active',1)->get() as $country)
                                                    <option value="{{ $country['id'] }}" @if(old('country_id') == $country['id']) selected="" @endif>{{ $country['country_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="user-name">المدينه <span>*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div id="cp-search-form">
                                            <div class="form-group search-input-area input-icon-location">
                                                <select id="location" class="select2 citySelect" name="city_id">
                                                    {{-- <option class="first"  disabled="" selected="">اختر المدينه</option> --}}
                                                    <div class="cityOptions"></div>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row role @if(old('type') && old('type') == 2) show @endif">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="phone1">رقم الهاتف <span>*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input type="text" id="phone1" class="form-control"
                                                   placeholder="رقم الهاتف " name="telephone" value="{{ old('telephone') }}">

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="phone">رقم الجوال <span>*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input type="text" id="phone" class="form-control"
                                                   placeholder="رقم الجوال " name="phone" required="" value="{{ old('phone') }}">

                                        </div>
                                    </div>
                                </div>


                                <div class="row role @if(old('type') && old('type') == 2) show @endif">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="purpose">النشاط<span>*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input type="text" id="purpose" class="form-control"
                                                   placeholder="النشاط" name="activity">
                                        </div>
                                    </div>
                                </div>
                                <div class="row role @if(old('type') && old('type') == 2) show @endif">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="email">البريد الالكتروني
                                            <span>*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input type="email" id="email" class="form-control"
                                                   placeholder="البريد الالكتروني . . ." name="email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row role @if(old('type') && old('type') == 2) show @endif">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label">السجل التجاري / الهوية<span> *</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="uploadfile">
                                            <ul class="picture-upload">
                                                <li>
                                                    <input type="file" id="img-upload1" class="form-control" name="commercial_register" accept="image/x-png,image/gif,image/jpeg">
                                                </li>
                                                <li>
                                                    <input type="file" id="img-upload2" class="form-control" name="identity" accept="image/x-png,image/gif,image/jpeg">
                                                </li>

                                            </ul>
                                        <p>الامتدادات المسموحة (png. - .jpg - .pdf - .docx)</p>
                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="password">كلمة المرور <span>*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input type="password" id="password" name="password" class="form-control"
                                                   placeholder="كلمة المرور">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <label class="control-label" for="password1">تاكيد كلمة المرور<span>*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-12">
                                        <div class="form-group">
                                            <input type="password" id="password1" name="repassword" class="form-control"
                                                   placeholder="تاكيد كلمة المرور" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="ml-auto col-sm-9 col-12 ml-none--mb">
                                        <div class="form-group">
                                            <button type="submit" class="cp-default-btn-sm">تسجيل</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row no-gutters mt-30">
                        <div class="newad">
                            <img src="{{url('/public/web')}}/img/newad.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="sidebar-item-box">
                        <ul class="sidebar-more-option">
                            <li>
                                <a href="post-ad.html"><img src="{{url('/public/web')}}/img/banner/more1.png" alt="more" class="img-fluid">اضف
                                    اعلانك</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{url('/public/web')}}/img/banner/more2.png" alt="more" class="img-fluid">المزادات</a>
                            </li>
                            <li>
                                <a href="favourite-ad-list.html"><img src="{{url('/public/web')}}/img/banner/more3.png" alt="more" class="img-fluid">الاعلانات المميزه</a>
                            </li>
                        </ul>
                    </div>
                    <div class="newad">
                        <img src="{{url('/public/web')}}/img/newad4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@section('script')
<script>


    function company() {
        $('.role').addClass('show')

    }

    function personal() {
        $('.role').removeClass('show')

    }

</script>
<script type="text/javascript">
    $(document).ready(function() {
        var country_id = $('.countrySelects').val();
        $.ajax({
            type: 'GET',
            url: '{{ url('getCitySelect') }}',
            data: {country_id: country_id },
            success: function(data) {
                // console.log(data);
                $('.citySelect').html(data);
            }
        });

        

    });

    $('.countrySelects').change(function(event) {
        var country_id = $('.countrySelects').val();
        $.ajax({
            type: 'GET',
            url: '{{ url('getCitySelect') }}',
            data: {country_id: country_id },
            success: function(data) {
                // console.log(data);
                $('.citySelect').html(data);
            }
        });
        return false;
    });

    $(document).ready(function() {
        var country_id = $('.countrySelects').val();
        $.ajax({
            type: 'GET',
            url: '{{ url('getCountryKey') }}',
            data: {country_id: country_id },
            success: function(data) {
                // console.log(data);
                $('#phone').val(data);
            }
        });
    });

    

    
</script>

@endsection
@endsection