@extends('admin.index')
@section('content')
<div class="container-fluid">
  
  <div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-denger card-header-icon">
          <div class="card-icon">
            <i class="material-icons">speaker_notes</i>
          </div>
          <p class="card-category">الأخبار</p>
          <h3 class="card-title">{{ \App\News::count() }}
          </h3>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">tag_faces</i>
          </div>
          <p class="card-category">الخدمات</p>
          <h3 class="card-title">{{ \App\Service::count() }}
          </h3>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-danger card-header-icon">
          <div class="card-icon">
            <i class="material-icons">tag_faces</i>
          </div>
          <p class="card-category">الخصائص</p>
          <h3 class="card-title">{{ \App\Gallery::count() }}
          </h3>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
          <div class="card-icon">
            <i class="material-icons">tag_faces</i>
          </div>
          <p class="card-category">الأطباء</p>
          <h3 class="card-title">{{ \App\Doctor::count() }}
          </h3>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    @foreach(\App\Statistic::where('active',1)->get() as $statistic)
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
          <div class="card-icon">
            {{-- <i class="material-icons">content_copy</i> --}}
            <img src="{{ Storage::url($statistic['img']) }}" height="50px" width="50px">
          </div>
          <p class="card-category">{{ $statistic['name_ar'] }}</p>
          <h3 class="card-title">{{ $statistic['count_num'] }}
          </h3>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">رسائل اتصل بنا</h4>
          <p class="card-category">عرض مختصر لأخر رسائل اتصل بنا</p>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-warning">
              <th>الرقم</th>
              <th>الأسم</th>
              <th>الهاتف</th>
              <th>عنوان الرسالة</th>
            </thead>
            <tbody>
              @foreach(\App\Contact::limit(5)->orderBy('id','desc')->get() as $contacts)
              <tr>
                <td>{{ $contacts['id'] }}</td>
                <td>{{ $contacts['name'] }}</td>
                <td>{{ $contacts['phone'] }}</td>
                <td>{{ $contacts['contact_subject_id'] }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header card-header-info">
          <h4 class="card-title">طلبات تحديد موعد</h4>
          <p class="card-category">عرض مختصر لأخر طلبات تحديد موعد</p>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-warning">
              <th>الرقم</th>
              <th>الأسم</th>
              <th>الهاتف</th>
              <th>الرسالة</th>
            </thead>
            <tbody>
              @foreach(\App\Order::limit(5)->orderBy('id','desc')->get() as $contacts)
              <tr>
                <td>{{ $contacts['id'] }}</td>
                <td>{{ $contacts['name'] }}</td>
                <td>{{ $contacts['phone'] }}</td>
                <td>{{ $contacts['msg'] }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
  </div>
</div>		
    
@endsection
@section('script')


@endsection