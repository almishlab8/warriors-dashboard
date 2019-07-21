@extends('layouts.app')

@section('content')
<form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="from-1">


            <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">الأسم</label>
          <div class="col-sm-10">
<<<<<<< HEAD
            <input type="text" name="name" value='{{ old("name") }}'  class="form-control" id="inputEmail3" placeholder="الأاسم">
=======
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputEmail3" placeholder="الأاسم">
>>>>>>> af94892bef7e9758bc38bd4fa205e7488146b83a
          </div>
        </div>
        <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">تاريخ الميلاد</label>
                <div class="col-sm-10">
                  <input type="date" value='{{ old("birthday") }}' name="birthday"class="form-control" id="inputEmail3" placeholder="تاريخ الميلاد">
                </div>
         </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">الجنس</label>
          <div class="col-sm-10">
                <select class="form-control" name="gender"  value='{{ old("gender") }}' >
                        <option    value=""></option>
                        <option    value="ذكر">ذكر</option>
                        <option    value="انثى">انثى</option>
                 </select>
          </div>
        </div>
        <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">عنوان السكن</label>
                <div class="col-sm-10">
                  <input type="text" value='{{ old("address") }}' name="address"class="form-control" id="inputEmail3" placeholder="عنوان السكن">
                </div>
         </div>
         <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> رقم الحالة</label>
                <div class="col-sm-10">
                  <input type="text" value='{{ old("student_no") }}' name="student_no"class="form-control" id="inputEmail3" placeholder="رقم الحالة">
                </div>
         </div>
         <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">رقم الهانف</label>
                <div class="col-sm-10">
                  <input type="text" value='{{ old("phone_no") }}' name="phone_no"class="form-control" id="inputEmail3" placeholder="رقم الهاتف">
                </div>
         </div>
         <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">مرفقات الطالب</label>
                <div class="col-sm-10">
                  <input type="File"  value='{{ old("student_documents") }}' name="student_documents"class="form-control" id="inputEmail3" >
                </div>
         </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">اضافة </button>
          </div>
        </div>


    </div>
      </form>
      @if (count($errors) > 0)
      @foreach ($errors->all() as $error )
      <div class="alert alert-danger">{{$error}}</div>
      @endforeach
      @endif

      @if (session('seuccs'))
      <div class="alert alert-dismissible alert-success text-center">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>تم الضافة بنحاح</strong> {{ session('seuccs')}} <a href="#" class="alert-link"></a>
      </div>
      @endif

@endsection
