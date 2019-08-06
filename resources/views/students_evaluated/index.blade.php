@extends('layouts.app')

@section('content')
<div class="container">

    <a href="{{ route('students_evaluated.create') }}"><div class="btn btn-success">اضافة تقييم للطالب </div></a>
    @if(count($all_students) > 0)

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">أسم الطالب</th>
            <th scope="col"> المادة</th>
            <th scope="col">درجة</th>
            <th scope="col">وصف الطالب</th>
            <th scope="col">تعديل</th>
            <th scope="col">حذف</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($all_students as $user)
          <tr>
            <td data-label="أسم الطالب" >
             @foreach ($students as $student)
              @if($user->students_id == $student->USERS_ID)
              {{ $student->name }}
              @endif
              @endforeach
            </td>
            <td data-label="أسم المادة" >
                    @foreach ($students as $student)
                     @if($user->students_id == $student->USERS_ID)
                     {{ $user->material_name }}
                     @endif
                     @endforeach
                   </td>

            <td data-label="درجة">
            {{ $user->mark }}
            </td>
            <td data-label="الطالب">
                {{ $user->description }}
            </td>
            <td data-label="تعديل">
              <a href="{{ route('students_evaluated.edit' ,    ['id' => $user->id ]) }}"><div class="btn btn-success">تعديل</div></a>
            </td>
           <td data-label="حذف">
                <form action="{{ route('students_evaluated.destroy' , ['id' => $user->id]) }}" method="POST">
                        {{ method_field('DELETE') }}
                       @csrf
                         <button class="btn btn-danger"  type="submit"  onclick="return confirm('هل انت متاكد من حذف التقييم الطالب ؟')">حذف</button>
                     </form>
           </td>
          </tr>
          @endforeach

          @else

              <p style="color:red; text-align: center" >لا يوجد اي تقييم للطلاب</p>

          @endif

        </tbody>

      </table>


@if (session('delete'))
<div class=" text-center alert alert-dismissible alert-success ">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong> تم الحذف بنجاح</strong> {{ session('delete')}} <a href="#" class="alert-link"></a>
</div>
@endif
@if (session('success'))
<div class=" text-center alert alert-dismissible alert-success ">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong> تم التحديث بنجاح</strong> {{ session('success')}} <a href="#" class="alert-link"></a>
</div>
@endif
@if (session('successs'))
<div class=" text-center alert alert-dismissible alert-success ">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong> تم اضافة التقييم بنجاح</strong> {{ session('success')}} <a href="#" class="alert-link"></a>
</div>
@endif
</div>
@endsection
