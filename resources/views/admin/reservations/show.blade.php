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
            {!! Form::open(['url'=>route('reservations' , ['id' => $data->id]),'files'=>true,'method'=>'put']) !!}

            <div class="form-row">
              <div class="col-md-6">
                <label class="col-form-label">الأسم</label>
                <input type="text" class="form-control" disabled="" value="{{ $data['name'] }}">
              </div>
              <div class="col-md-6">
                <label class="col-form-label"> بريد الراسل</label>
                <input type="text" class="form-control" disabled="" value="{{ $data['email'] }}">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12">
                <label class="col-form-label"> رقم هاتف الراسل</label>
                <input type="text" class="form-control" disabled="" value="{{ $data['phone'] }}">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12">
                <label class="col-form-label">الطبيب</label>
                <input type="text" class="form-control" disabled="" value="{{ \App\Doctor::find($data['doctor_id'])['name_ar'] }}">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
  @section('script')
   
  @endsection
@endsection