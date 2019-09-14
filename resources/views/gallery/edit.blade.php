@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">



                    <form action="{{route('teachers.update' , $teacher->id)}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        {{ method_field('PUT') }}
                        <div class="from-1">
                            <h4>تعديل الاستاذ </h4>
                            <hr>
                            <br>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">الأسم</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="inputEmail3" value="{{$teacher->name }}" placeholder="ادخال اسم الاستاذ">
                                </div>
                            </div>

                            <div class="user-form">
                                <h1>تعديل معلومات حساب الاستاذ</h1>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">الايميل</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail3" value="{{$teacher->user->email }}"  placeholder="ادخال ايميل الاستاذ">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">الباسورد</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control" id="inputEmail3"  placeholder="ادخال باسورد الاستاذ">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">تاريخ الميلاد</label>
                                <div class="col-sm-10">
                                    <input type="datetime" name="birthday" class="form-control" id="inputEmail3" value="{{ $teacher->birthday }}" placeholder="تاريخ الميلاد">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">الجنس</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="gender">
                                        <option value="ذكر"
                                        @if($teacher->gender == 'ذكر')
                                        selected
                                        @else
                                        ''
                                        @endif>ذكر</option>
                                        <option value="انثى"
                                        @if($teacher->gender == 'انثى')
                                        selected
                                        @else
                                        ''
                                        @endif>انثى</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">المؤهلات</label>
                                <div class="col-sm-10">
                                    <input type="text" name="qualifications"class="form-control" id="inputEmail3" value="{{ $teacher->qualifications }}" placeholder="ادخال المؤهلات">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">عنوان السكن</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address"class="form-control" id="inputEmail3" value="{{ $teacher->address }}" placeholder="عنوان السكن">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">رقم الهانف</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone_no"class="form-control" id="inputEmail3" value="{{ $teacher->phone_no }}" placeholder="رقم الهاتف">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">وثائق الاستاذ</label>
                                <div class="col-sm-10">
                                    <input type="File" name="teacher_documents"class="form-control" id="inputEmail3" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">شهادات الاستاذ</label>
                                <div class="col-sm-10">
                                    <input type="File" name="teacher_certificate"class="form-control" id="inputEmail3" >
                                </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">تحديث </button>
                            </div>
                            </div>

                            @if (count($errors) > 0)
                            @foreach ($errors->all() as $error )
                            <div class="alert alert-danger">{{$error}}</div>
                            @endforeach
                            @endif

                            @if (session('success'))
                                <div class="alert alert-dismissible alert-success text-center">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>تم التعديل بنجاح</strong> {{ session('success')}} <a href="#" class="alert-link"></a>
                                </div>
                            @endif
                        </div>
                    </form>








                </div>
            </div>
        </div>
    </div>
</div>
@endsection


