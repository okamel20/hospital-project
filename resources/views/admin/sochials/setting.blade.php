@extends('admin.index')
@section('content')
     <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card" >
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ $title }}</h4>
                  <p class="card-category">{{ $title }}</p>
                </div>
                <div class="card-body">
                  {!! Form::open(['url'=>route('sochialsSectionsUpdate' , ['id' => $data->id]),'files'=>true,'method'=>'put']) !!}

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> عنوان القسم عربى</label>
                          <div class="form-group">
                            <input type="text" name="title_ar" class="form-control" value="{{ oldOrValue('title_ar',$data) }}">
                          </div>
                        </div>
                      </div>

                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> عنوان القسم بالانجليزى</label>
                          <div class="form-group">
                            <input type="text" name="title_en" class="form-control"  value="{{ oldOrValue('title_en',$data) }}">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> وصف قصير لـ  القسم عربى</label>
                          <div class="form-group">
                            <input type="text" name="desc_ar" class="form-control"  value="{{ oldOrValue('desc_ar',$data) }}">
                          </div>
                        </div>
                      </div>

                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> وصف قصير لـ  القسم بالانجليزى</label>
                          <div class="form-group">
                            <input type="text" name="desc_en" class="form-control"  value="{{ oldOrValue('desc_en',$data) }}">
                          </div>
                        </div>
                      </div>


                      <div class="form-group col-lg-12 ">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                          <label class="btn btn-secondary  @if($data->show_home == '1') btn btn-primary active @endif">
                            <input type="radio" name="show_home" id="option2" value="1" autocomplete="off"@if($data->show_home == 1) checked="" @endif> ظاهر فى الرئيسية
                          </label>
                          <label class="btn btn-secondary @if($data->show_home == '0') btn btn-primary active @endif">
                            <input type="radio" name="show_home" id="option1" value="0" autocomplete="off" @if($data->show_home == 0) checked="" @endif> غير ظاهر فى الرئيسية
                          </label>
                        </div>
                      </div>

                      

                    <button type="submit" class="btn btn-primary pull-right">{{ trans('admin.send') }}</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
  @section('script')
   
  @endsection
@endsection