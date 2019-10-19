@extends('home')
@section('content')
     <div class="page">
        <section class="contactHeader">
            <div class="container">
                <div class="row nomargin align-items-lg-end">
                    <div class="col-12 col-lg-5">
                        <div class="IMG">
                            <img src="{{ url('public/web') }}/img/contact.jpg" alt="Contact Us">
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <h1>{{ trans('admin.contact2') }}</h1>
                        <div class="contactText">
                            <div class="contactItem">
                                <i class="fas fa-phone"></i><span>{{ setting()['phone'] }}</span>
                            </div>
                            <div class="contactItem">
                                <i class="fas fa-envelope"></i><span>{{ setting()['email'] }}</span>
                            </div>
                            <div class="contactItem">
                                <i class="fas fa-map-marker-alt"></i><span>{{ setting()['address_'.lang()] }}<span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contactForm">
            <div class="container">
                <div class="formTitle">{{ trans('admin.contactdesc') }}</div>
                    <form action="{{ url('/contact') }}" method="post" id="contactForm">
                    {{ csrf_field() }}
                    <div class="inputHolder">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" id="username" placeholder="{{ trans('admin.name') }}">
                    </div>
                    <div class="inputHolder">
                        <i class="far fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="{{ trans('admin.email') }}">
                    </div>
                    <div class="inputHolder">
                        <i class="fas fa-mobile-alt"></i>
                        <input type="number" name="mobile" id="mobile" placeholder="{{ trans('admin.mobile') }}">
                    </div>
                    <div class="inputHolder">
                        <i class="fas fa-file-alt"></i>
                        <input type="text" name="contact_subject_id" id="subject" placeholder="{{ trans('admin.subject') }}">
                    </div>
                    <div class="inputHolder textarea">
                        <i class="far fa-comment-alt"></i>
                        <textarea name="msg" id="message" placeholder="{{ trans('admin.msg') }}"></textarea>
                    </div>
                    <div class="inputHolder submit text-center">
                        <input type="submit" value="{{ trans('admin.send') }}" class="primaryButton">
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection