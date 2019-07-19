@extends('layouts.app')

@section('content')
<div class="container">
    <div class="table-1">
        <table class="table">
                <thead>
                  <tr>
                    <th scope="col">الأسم</th>
                    <th scope="col">تاريخ الميلاد</th>
                    <th scope="col">الجنس</th>
                    <th scope="col">عنوان السكن</th>
                    <th scope="col">رقم الحالة</th>
                    <th scope="col">رقم الهاتف</th>
                    <th scope="col">الصف</th>
                    <th scope="col">مرفقات الطالب</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($all as $alluser)
                  <tr>
                    <th scope="row">{{$alluser->name}}</th>
                    <td>{{$alluser->created_at->toDateString()}}</td>
                    <td>{{$alluser->gender}}</td>
                    <td>{{$alluser->address}}</td>
                    <td>{{$alluser->student_no}}</td>
                    <td>{{$alluser->phone_no}}</td>
                    <td>
                    @foreach ($class as $clas)
                    @if ($clas->id == $alluser->classes_ID)
                    {{$clas->class_name}}
                    @endif
                    @endforeach
                   </td>
                    <td><a class="a" href="{{$alluser->student_documents}}" download="upload/students/{{$alluser->student_documents}}">تنزيل</a></td>
                    <td><a  class="a" href="{{route('students.edit' ,    ['id' => $alluser->id])}}">تعديل</a></td>
                    <td><a onclick="return confirm('هل انت متأكد من حذف هذه المستخدم ؟');"   class="a" href="{{route('students.destroy' , ['id' => $alluser->id])}}">حذف</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @if (session('delete'))
              <div class=" text-center alert alert-dismissible alert-success ">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>تم الحذف بنحاح</strong> {{ session('delete')}} <a href="#" class="alert-link"></a>
              </div>
              @endif
</div>
<script>
    $.alert({
        title: 'Alert!',
        content: 'Simple alert!',
    });
</script>
</div>




@endsection
