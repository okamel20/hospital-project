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
            {!! Form::open(['url'=>adminUrl('sochials'),'files'=>true]) !!}

            <div class="col-md-12">
              <label class="col-form-label">الأيقونة</label>
              <select class="form-control" name="icon" required="">
                <option value="fab fa-google" style="color: black">google</option>
                <option value="fab fa-vimeo-v" style="color: black">vimeo</option>
                <option value="fab fa-linkedin-in" style="color: black">linkedin</option>
                <option value="fas fa-rss" style="color: black">rss</option>
                <option value="fab fa-twitter" style="color: black">twitter</option>
                <option value="fab fa-facebook-f" style="color: black">facebook</option>
              </select>
              
            </div>

            <div class="col-md-12">
              <div class="form-group">
              <label class="col-form-label">الرابط</label>
              <div class="form-group">
              <input type="text" name="link" class="form-control" required="" value="{{ old('link') }}">
              </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-secondary active">
                    <input type="radio" name="active" id="option2" value="1" autocomplete="off" checked> مفعل
                  </label>
                  <label class="btn btn-secondary ">
                    <input type="radio" name="active" id="option1" value="0" autocomplete="off" > غير مفعل
                  </label>
                </div>
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
    <script type="text/javascript">
      $('.demo').iconpicker();

    </script>
  @endsection
@endsection