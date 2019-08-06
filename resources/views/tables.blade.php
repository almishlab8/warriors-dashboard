@extends('layouts.app')
@section('content')
{{-- @include('layouts.messages') --}}
<div class="container">
{{-- Start Title --}}
    <h1 class="my-2">الجدول الأسبوعي</h1>
{{-- End Title --}}

    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                    {{$error}} <br>
            @endforeach
        </div>
    @endif

    @if (Session::has('success'))
        <div id="alert" class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        <script>
           var alert = document.getElementById('alert');
            setTimeout(function(){ 
                alert.style.display = "none";
            }, 3000);
        </script>
    @endif
<div class="row">

    <div class="col-md-2">
            <div class="input-group">
                <select class="custom-select form-control" name="">
                  <option selected disabled>الصف</option>
                  <option value="1">الأول</option>
                  <option value="2">الثاني</option>
                  <option value="3">الثالث</option>
                  <option value="4">الرابع</option>
                  <option value="5">الخامس</option>
                  <option value="6">السادس</option>
                </select>
              </div>
    </div>

    <div class="col-md-2">
        <div class="input-group">
            <select class="custom-select form-control" name="">
              <option selected disabled>اليوم</option>
              <option value="1">السبت</option>
              <option value="2">الأحد</option>
              <option value="3">الأثنين</option>
              <option value="4">الثلاثاء</option>
              <option value="5">الاربعاء</option>
              <option value="6">الخميس</option>
            </select>
          </div>
    </div>

    <div class="col-md-2">
            <div class="input-group">
                <select class="custom-select form-control" name="">
                  <option selected disabled>الدرس</option>
                  <option value="1">الأول</option>
                  <option value="2">الثاني</option>
                  <option value="3">الثالث</option>
                  <option value="4">الرابع</option>
                  <option value="5">الخامس</option>
                  <option value="6">السادس</option>
                </select>
            </div>
    </div>

    <div class="col-md-2">
        <div class="input-group">
            <select class="custom-select form-control" name="">
              <option selected disabled>المواد الدراسية</option>
                <option class="font-weight-bold" disabled>مواد الصف الأول</option>
                    <option value="1">قراءة</option>
                    <option value="2">رياضايات</option>
                    <option value="3">حاسبة</option>
                    <option value="4">اخلاقية</option>
                    <option value="5">رياضة</option>
                    <option value="6">فنية</option>
                <option class="font-weight-bold" disabled>مواد الصف الثاني</option>
                    <option value="1">قراءة</option>
                    <option value="2">رياضايات</option>
                    <option value="3">حاسبة</option>
                    <option value="4">اخلاقية</option>
                    <option value="5">رياضة</option>
                    <option value="6">فنية</option>
            </select>
          </div>
    </div>

    <div class="col-md-2">
        <div class="input-group">
            <select class="custom-select form-control" name="">
              <option selected disabled>الأستاذ</option>
              <option value="1">السبت</option>
              <option value="2">الأحد</option>
              <option value="3">الأثنين</option>
              <option value="4">الثلاثاء</option>
              <option value="5">الاربعاء</option>
              <option value="6">الخميس</option>
            </select>
          </div>
    </div>


    <div class="col-md-2">
            <div class="input-group">
                <input type="time" class="form-control">
            </div>
    </div>
</div>
{{-- Start Table --}}
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
{{-- End Table --}}

{{-- End Content --}}
</div>
@endsection