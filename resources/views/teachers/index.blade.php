@extends('layouts.app')
@section('content')

@include('layouts.messages')

<div class="container">


<div style="padding-bottom:5%;">
  <a  href="/teachers/create" class="btn btn-success"><i class="ficon icon-plus"></i> آضافةاستاذ</a>
</div>
@if (count($teachers->all()) > 0)
<div class="table-responsive text-nowrap">
<table class="table table-striped w-auto " style="width:auto;font-size: 12px;">
    <thead >
      <tr>
        <th>الاسم</th>
        <th>تاريخ الميلاد</th>
        <th>الجنس</th>
        <th>الهاتف</th>
        <th>العنوان</th>
        <th>المؤهلات</th>
        <th>التعديل</th>
        <th>الحذف</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
        <tr>
        <td>{{$teacher->name}}</td>
        <td>{{$teacher->birthday}}</td>
        <td>{{$teacher->gender}}</td>
        <td>{{$teacher->phone_no}}</td>
        <td>{{$teacher->address}}</td>
        <td>{{$teacher->qualifications}}</td>
        <td>
            <a  href="/teachers/{{$teacher->id}}/edit" class="btn act-btn btn-primary">تعديل</a>
        </td>

        <td>
          <form class="delete" action="{{ action('TeachersController@destroy',$teacher->id) }}" method="POST" onsubmit ='return confirmDelete()'>
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}
              <input type="submit" value="حذف" class="btn act-btn btn-danger">
          </form>
        </td>
      <script>
              function confirmDelete() {
                  var result = confirm('هل انت متأكد من حذف معلومات الاستاذ ؟');

                  if (result) {
                          return true;
                      } else {
                          return false;
                      }
                }
      </script>
        </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  </div>
  @else
    <div class="m-3">
        <label class="text-danger">{{"لا توجد بيانات لِعرضها "}}</label>
    </div>
@endif
</div>


@endsection
