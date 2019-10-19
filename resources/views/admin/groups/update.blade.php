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
              {!! Form::open(['url'=>adminUrl('groups/'.$data->id),'method'=>'put','files'=>true]) !!}

               
                <div class="col-lg-12">
                  <label>{{trans('admin.group_name_ar')}}</label>
                  <input type="text" name="group_name_ar" class="form-control" required="" placeholder="{{trans('admin.group_name_ar')}}" value="{{oldOrValue('group_name_ar',$data)}}">
                </div>

                <div class="col-lg-12">
                  <label>{{trans('admin.group_name_en')}}</label>
                  <input type="text" name="group_name_en" class="form-control" required="" placeholder="{{trans('admin.group_name_en')}}" value="{{oldOrValue('group_name_en',$data)}}">
                </div>

                 <div class="col-lg-12">
                  <label>{{trans('admin.groups')}}</label>
                  <br>
                  <?php $count = 1 ;?>
                  @foreach(Route::getRoutes() as $value)
                  @if ($value->getPrefix() == '/admin')
                  @if($value->getAction('as') && $value->getAction('name'))
                  <label class="alert alert-primary  role{{ $count }} " style="width: 350px">
                    <input type="checkbox" name="roles[]" data-id="{{ $count }}" class="form-control role" value="{{ $value->getAction('as') }}" {{ checkedGroup($data->id,$value->getAction('as')) }} >{{ $value->getAction('name') }}</label>
                    <?php $count++ ;?>
                  @endif
                  @endif
                  @endforeach
                  
                </div>

                <div class="col-lg-12">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary @if($data->active == 0) active @endif">
                      <input type="radio" name="active" id="option2" value="0" autocomplete="off"@if($data->active == 0) checked="" @endif> {{ trans('admin.noActvided') }}
                    </label>
                    <label class="btn btn-secondary @if($data->active == 1) active @endif">
                      <input type="radio" name="active" id="option1" value="1" autocomplete="off" @if($data->active == 1) checked="" @endif> {{ trans('admin.actvided') }}
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