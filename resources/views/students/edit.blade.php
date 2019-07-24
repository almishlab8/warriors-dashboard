@extends('layouts.app')

@section('content')
<form action="{{route('students.update' , ['id' => $edit->id ])}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="from-1">

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">الأسم</label>
            <div class="col-sm-10">
              <input type="text" name="name"  class="form-control"  id="inputEmail3" placeholder="الأاسم" value="{{$edit->user->name}}">
            </div>
          </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">الاميل</label>
              <div class="col-sm-10">
              <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="الربد الكتروني" value="{{$edit->user->email}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">الرمز السري</label>
              <div class="col-sm-10">
                <input type="password"  name="password" class="form-control" id="inputEmail3" placeholder="الرمز السري"  >
              </div>
            </div>
        <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">تاريخ الميلاد</label>
                <div class="col-sm-10">
<<<<<<< HEAD
                <input  type="text"  name="birthday" value="{{$edit->birthday }}" class="form-control" id="inputEmail3" placeholder="تاريخ الميلاد">
=======
                <input  type="date"  name="birthday" value="{{$edit->birthday }}" class="form-control" id="inputEmail3" placeholder="تاريخ الميلاد">
>>>>>>> 864a563ce3c1e8e75916cb007f2deda653b8a9b7
                </div>
         </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">الجنس</label>
          <div class="col-sm-10">
          <select class="form-control" name="gender"  >
                <output></output>
                <option  value="ذكر" {{$edit->gender  ===  'ذكر'  ? 'selected' : ' ' }}>ذكر</option>
                <option value="انثى" {{$edit->gender === 'انثى' ? 'selected' : ' ' }}>انثى</option>
                 </select>
          </div>
        </div>
        <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">عنوان السكن</label>
                <div class="col-sm-10">
                  <input type="text" name="address" value="{{$edit->address}}"class="form-control" id="inputEmail3" placeholder="عنوان السكن">
                </div>
         </div>
         <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">رقم الحالة </label>
                <div class="col-sm-10">
                  <input type="text" name="student_no" value="{{$edit->student_no}}" class="form-control" id="inputEmail3" placeholder="رقم الحالة">
                </div>
         </div>
         <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">رقم الهاتف</label>
                <div class="col-sm-10">
                  <input type="text" name="phone_no"class="form-control" value="{{$edit->phone_no}}"  id="inputEmail3" placeholder="رقم الهاتف">
                </div>
         </div>
         <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">مرفقات الطالب </label>
                <div class="col-sm-10">
                  <input type="File" name="student_documents"  value="{{$edit->student_documents}}" class="form-control" id="inputEmail3" >
                </div>
         </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">تحديث</button>
          </div>
        </div>

        @if (count($errors) > 0)
        @foreach ($errors->all() as $error )
        <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif

        @if (session('seuccs'))
        <div class="alert alert-dismissible alert-success text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>تم التحديث بنحاح</strong> {{ session('seuccs')}} <a href="#" class="alert-link"></a>
        </div>
        @endif

    </div>
      </form>


@endsection
