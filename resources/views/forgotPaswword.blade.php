@extends('home')
@section('content')
    
    <section class="bg-accent-shadow-body s-space-bottom-full-single">
        @include('layouts.headerPage')
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="gradient-wrapper mb--sm">
                        <div class="gradient-title">
                            <h2>{{ $title }}</h2>
                        </div>
                        <div class="input-layout1 gradient-padding">
                            @include('layouts.msg')
                            {!! Form::open(['url'=>url('signup'),'files'=>true , 'method' => 'POST' , 'id' => 'login-page-form' , 'class' => 'normalForm']) !!}
                                <div class="row">
                                    <div class="col-sm-2 col-12">
                                        <label class="control-label" for="phone">رقم الجوال <span>*</span></label>
                                    </div>
                                    <div class="col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="text" id="phone" class="form-control"
                                                   placeholder="رقم الجوال " name="phone" required="" value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-12">
                                        <div class="form-group">
                                            <button type="submit" class="cp-default-btn-sm">أرسال</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="ml-auto col-sm-9 col-12 ml-none--mb">
                                        <div class="form-group">
                                            <button type="submit" class="cp-default-btn-sm">أرسال</button>
                                        </div>
                                    </div>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        var country_id = '{{ config('app.country') }}';
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