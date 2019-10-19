@extends('home')
@section('content')
    <div class="page">
        <section class="docProfile">
            <div class="profileHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="docIMG">
                                <div class="IMG">
                                    <img src="{{ Storage::url($data['img']) }}" alt="Doctor Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <h1>{{ $data['name_'.lang()] }}</h1>
                            <div class="docJob">{{ $data['job_'.lang()] }}</div>
                            <div class="docContact"><span class="item"><i class="fas fa-phone"></i><span class="ltr">{{ $data['phone'] }}</span></span><span class="item"><i class="fas fa-envelope"></i><span>{{ $data['email'] }}</span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profileText">
                <div class="container">
                    <div class="col-12 col-lg-8 offset-lg-4">
                        <p>{!! $data['desc_'.lang()] !!}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bookAppointment">
            <div class="container">
                <h2 class="formTitle">{{ trans('admin.select_a_date') }}</h2>
                <form action="{{ url('/bookAppointment/'.$data['id']) }}" method="post" id="bookAppointment">
                    {{ csrf_field() }}
                    <div class="inputHolder">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" id="username" required="" placeholder="{{ trans('admin.name') }}">
                    </div>
                    <div class="inputHolder">
                        <i class="far fa-envelope"></i>
                        <input type="email" name="email" id="email" required="" placeholder="{{ trans('admin.email') }}">
                    </div>
                    <div class="inputHolder">
                        <i class="far fa-phone"></i>
                        <input type="number" name="phone" id="phone" required="" placeholder="{{ trans('admin.mobile') }}">
                    </div>
                    <div class="inputHolder submit">
                        <input type="submit" value="{{ trans('admin.select_a_date') }}" class="primaryButton">
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection