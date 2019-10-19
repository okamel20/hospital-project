@extends('admin.index')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">{{ $title }}</h4>
            <p class="card-category">{{ $title }}</p>
          </div>
          <div class="card-body">
            {!! Form::open(['url'=>adminUrl('doctors'),'files'=>true]) !!}

            <div class="col-lg-12">
              <label>القسم</label>
              <select class="form-control" required="" name="section_id">
                @foreach(\App\Section::all() as $section)
                <option value="{{ $section->id }}" style="color: black">{{ $section['name_'.lang()] }}</option>
                @endforeach
              </select>
            </div>

            <div class="col-lg-12">
              <label>اسم الطبيب بالعربى </label>
              <input type="text" name="name_ar" class="form-control" placeholder="اسم الطبيب بالعربى" required value="{{ old('name_ar') }}">
            </div>
            <div class="col-lg-12">
              <label>اسم الطبيب  انجليزى </label>
              <input type="text" name="name_en" class="form-control" placeholder="اسم الطبيب  انجليزى" required value="{{ old('name_en') }}">
            </div>

            <div class="col-lg-12">
              <label>الوظيفة بالعربى </label>
              <input type="text" name="job_ar" class="form-control" placeholder="الوظيفة بالعربى" required value="{{ old('job_ar') }}">
            </div>
            <div class="col-lg-12">
              <label>الوظيفة  انجليزى </label>
              <input type="text" name="job_en" class="form-control" placeholder="الوظيفة  انجليزى" required value="{{ old('job_en') }}">
            </div>

            <div class="col-lg-12">
              <label>الهاتف </label>
              <input type="text" name="phone" class="form-control" placeholder="الهاتف" required value="{{ old('phone') }}">
            </div>
            <div class="col-lg-12">
              <label>البريد الألكترونى </label>
              <input type="text" name="email" class="form-control" placeholder="البريد" required value="{{ old('email') }}">
            </div>
            
            <div class="col-lg-12">
              <label> {{ trans('admin.img') }} </label>
              <input type="file" name="img" class="form-control" placeholder="{{ trans('admin.img') }}" required="" accept="image/x-png,image/gif,image/jpeg">
            </div>

            <div class="col-md-12">
              <label class="col-form-label "> الوصف بالعربى</label>
              <textarea class="form-control" required="" name="desc_ar" rows="10">{{ old('desc_ar') }}</textarea>
            </div>

            <div class="col-md-12">
              <label class="col-form-label"> الوصف بالانجليزى </label>
              <textarea class="form-control" required="" name="desc_en" rows="10">{{ old('desc_en') }}</textarea>
            </div>

            <div class="col-lg-12">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary">
                  <input type="radio" name="active" id="option2" value="0" autocomplete="off"> {{ trans('admin.noActvided') }}
                </label>
                <label class="btn btn-secondary active">
                  <input type="radio" name="active" id="option1" value="1" autocomplete="off" checked> {{ trans('admin.actvided') }}
                </label>
              </div>
            </div>
            {!! Form::submit(trans('admin.send'),['class'=>'btn btn-primary ']) !!}
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>

  @section('script')
  
  @endsection
@endsection