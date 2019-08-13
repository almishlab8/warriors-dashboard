@extends('layouts.app')
@section('content')

@include('layouts.messages')

<div class="container">


<div style="padding-bottom:5%;">
  <a  href="/studingSubjects/create" class="btn btn-success"><i class="ficon icon-plus"></i>  آضافة واجب جديد للطالب</a>
</div>
@if (count($studingSubjects->all()) > 0)
<div class="table-responsive text-nowrap">
<table class="table table-striped w-auto " style="width:auto;font-size: 12px;">
    <thead >
      <tr>
        <th>الصفوف</th>
        <th>واجبات الطالب</th>
        <th>تاريخ الواجب</th>
        <th>التعديل</th>
        <th>الحذف</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($studingSubjects as $studingSubject)
        <tr>
        <td>{{$studingSubject->class->class_name}}</td>
        <td>{{$studingSubject->name}}</td>
        <td>{{$studingSubject->teachers->name}}</td>
        <td>
            <a href="/studingSubjects/{{$studingSubject->id}}/edit" class="btn act-btn btn-primary">تعديل</a>
        </td>

        <td>
          <form class="delete" action="{{ action('Studing_subjectsController@destroy',$studingSubject->id) }}" method="POST" onsubmit ='return confirmDelete()'>
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
