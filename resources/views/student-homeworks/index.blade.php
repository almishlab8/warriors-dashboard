@extends('layouts.app')
@section('content')

@include('layouts.messages')

<div class="container">


<div style="padding-bottom:5%;">
  <a  href="/student_homeworks/create" class="btn btn-success"><i class="ficon icon-plus"></i> آضافة واجب جديد</a>
</div>
@if (count($student_homeworks->all()) > 0)
<div class="table-responsive text-nowrap">
<table class="table table-striped w-auto " style="width:auto;font-size: 12px;">
    <thead >
      <tr>
        <th>الطلاب</th>
        <th>الملاحظات</th>
        <th>المواد </th>
        <th>تاريخ تسليم الواجب</th>
        <th>التعديل</th>
        <th>الحذف</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($student_homeworks as $student_homework)
        <tr>
        <td>{{$student_homework->student->name}}</td>
        <td>{{$student_homework->notes}}</td>
        <td>{{$student_homework->material->material_name}}</td>
        <td>{{$student_homework->deadline_date}}</td>
        <td>
            <a  href="/student_homeworks/{{$student_homework->id}}/edit" class="btn act-btn btn-primary">تعديل</a>
        </td>

        <td>
          <form class="delete" action="{{ action('Student_homeworkController@destroy',$student_homework->id) }}" method="POST" onsubmit ='return confirmDelete()'>
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
