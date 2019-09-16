@extends('layouts.app')
@section('content')

@include('layouts.messages')

<div class="container">


<div style="padding-bottom:5%;">
  <a  href="/class_homeworks/create" class="btn btn-success"><i class="ficon icon-plus"></i> آضافة واجب جديد</a>
</div>
@if (count($class_homeworks->all()) > 0)
<div class="table-responsive text-nowrap">
<table class="table table-striped w-auto " >
    <thead >
      <tr>
        <th>الصفوف</th>
        <th>الملاحظات</th>
        <th>المواد </th>
        <th>تاريخ تسليم الواجب</th>
        <th>التعديل</th>
        <th>الحذف</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($class_homeworks as $class_homework)
        <tr>
        <td>{{$class_homework->class->class_name}}</td>
        <td>{{$class_homework->notes}}</td>
        <td>{{$class_homework->material->material_name}}</td>
        <td>{{$class_homework->deadline_date}}</td>
        <td>
            <a  href="/class_homeworks/{{$class_homework->id}}/edit" class="btn act-btn btn-primary">تعديل</a>
        </td>

        <td>
          <form class="delete" action="{{ action('Class_homeworkController@destroy',$class_homework->id) }}" method="POST" onsubmit ='return confirmDelete()'>
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}
              <input type="submit" value="حذف" class="btn act-btn btn-danger">
          </form>
        </td>
      <script>
              function confirmDelete() {
                  var result = confirm('هل انت متأكد من حذف معلومات الواجب ؟');

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
