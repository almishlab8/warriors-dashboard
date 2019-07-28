@extends('layouts.app')

@section('content')
<div class="container">


<div style="padding-bottom:5%;">
  <a  href="/students/create" class="btn btn-success"><i class="ficon icon-plus"></i> اضافة طالب</a>
</div>
@if (count($students->all()) > 0)
<div class="table-responsive text-nowrap">
<table class="table table-striped w-auto " style="width:auto;font-size: 12px;">
    <thead >
            <div class="thead">
          <tr>
                <th scope="col">الأسم</th>
                <th scope="col">تاريخ الميلاد</th>
                <th scope="col">الجنس</th>
                <th scope="col">عنوان السكن</th>
                <th scope="col">رقم الحالة</th>
                <th scope="col">رقم الهاتف</th>
                <th scope="col">الصف</th>
                <th scope="col">مرفقات الطالب</th>
                <th scope="col">تعديل</th>
                <th scope="col">حذف</th>
          </tr>
            </div>
        </thead>
        <tbody>
             @foreach ($students as $stud)

          <tr>
            <td data-label="الأسم">{{$stud->name}}</td>
            <td data-label="تاريخ الميلاد">{{$stud->birthday}}</td>
            <td data-label="الجنس">{{$stud->gender}}</td>
            <td data-label="عنوان السكن">{{$stud->address}}</td>
            <td data-label="رقم الحالة">{{$stud->student_no}}</td>
            <td data-label="رقم الهاتف">{{$stud->phone_no}}</td>
           @if($stud->classes_ID > 0)
            <td data-label="الصف">
                    @foreach ($class as $clas)
                    @if ($clas->id == $stud->classes_ID)
                    {{$clas->class_name}}
                    @endif
                    @endforeach
            </td >
            @else
            <td data-label="الصف">لايوجد صف</td>
            @endif
          <td   data-label="مرفقات الطالب">
            @empty(!$stud->student_documents ==  ' ')
           <a class="a" href="upload/student_documents/{{$stud->student_documents}}" download="upload/student_documents/{{$stud->student_documents}}"><div class="btn act-btn btn-primary">تنزيل </div></a>
            @else
            <div>لا توجد مرفقات</div>
            @endempty
          </td>

            <td data-label="تعديل"><a  class="a" href="{{route('students.edit' ,    ['id' => $stud->id])}}"><div class="btn act-btn btn-info">تعديل</div></a></td>
            <td data-label="حذف"> <a  onclick="return confirm('هل انت متأكد من حذف هذه المستخدم ؟');"   class="a" href="{{route('students.destroy' , ['id' => $stud->id])}}"><div class="btn act-btn btn-danger">حذف</div></a></td>
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
@if (session('delete'))
<div class=" text-center alert alert-dismissible alert-success ">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>تم حذف الطالب</strong> {{ session('delete')}} <a href="#" class="alert-link"></a>
</div>
@endif

</div>
@endsection
