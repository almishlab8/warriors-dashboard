@extends('layouts.app')

@section('content')
<div class="container">

    <a href="{{ route('students_evaluated.create') }}"><div class="btn btn-success">اضافة تقييم للطالب </div></a>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">أسم الطالب</th>
            <th scope="col">درجة</th>
            <th scope="col">وصف الطالب</th>
            <th scope="col">تعديل</th>
            <th scope="col">حذف</th>
          </tr>
        </thead>
        @if(count($all_students) > 0)
        <tbody>
            @foreach ($all_students as $user)
          <tr>
            <td data-label="أسم الطالب" >
             @foreach ($students as $student)
              @if($user->students_id === $student->id)
              {{ $student->name }}
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
           <td>
                <form action="{{ route('students_evaluated.destroy' , ['id' => $user->id]) }}" method="POST">
                        {{ method_field('DELETE') }}
                       @csrf
                         <button class="btn btn-danger"  type="submit"  onclick="return confirm('هل انت متاكد من حذف التقييم الطالب ؟')">حذف</button>
                     </form>
           </td>
          </tr>
          @endforeach

          @else
          <td>
              <p style="color:red" >لا يوجد اي تقييم للطلاب</p>
          </td>
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
