@extends('layouts.app')

@section('content')
<table>

        <thead class="thead">
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
             @foreach ($all as $alluser)

          <tr>
            <td data-label="الأسم">{{$alluser->name}}</td>
            <td data-label="تاريخ الميلاد">{{$alluser->birthday}}</td>
            <td data-label="الجنس">{{$alluser->gender}}</td>
            <td data-label="عنوان السكن">{{$alluser->address}}</td>
            <td data-label="رقم الحالة">{{$alluser->student_no}}</td>
            <td data-label="رقم الهاتف">{{$alluser->phone_no}}</td>
           @if($alluser->classes_ID > 0)
            <td data-label="الصف">
                    @foreach ($class as $clas)
                    @if ($clas->id == $alluser->classes_ID)
                    {{$clas->class_name}}
                    @endif
                    @endforeach
            </td >
            @else
            <td data-label="الصف">لايوجد صف</td>
            @endif
          <td   data-label="مرفقات الطالب">
            @empty(!$alluser->student_documents ==  ' ')
           <a class="a" href="{{$alluser->student_documents}}" download="upload/students/{{$alluser->student_documents}}"><div class="btn btn-primary">تنزيل </div></a>
            @else
            <div>لا توجد مرفقات</div>
            @endempty
          </td>

            <td data-label="تعديل"><a  class="a" href="{{route('students.edit' ,    ['id' => $alluser->id])}}"><div class="btn btn-info">تعديل</div></a></td>
            <td data-label="حذف"> <a  onclick="return confirm('هل انت متأكد من حذف هذه المستخدم ؟');"   class="a" href="{{route('students.destroy' , ['id' => $alluser->id])}}"><div class="btn btn-danger">حذف</div></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection
