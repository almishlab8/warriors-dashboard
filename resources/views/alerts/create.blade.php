@extends('layouts.app')

@section('content')


<div class="container">
<div class="row">
<a href="{{route('alerts.index')}}">
رجوع /
<i class="icon-bullhorn"></i>التبليغات
</a>
</div>
    <div class="row justify-content-center">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">




                    <form action="{{route('alerts.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}

                        <div class="from-1">
                            <h4>اضافة تبليغ جديد</h4>
                            <hr>
                            <br>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">التبليغ</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" name="title" value="{{ old('title') }}" rows="3" cols="10" placeholder="اكتب نص التبليغ ..."></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 12px;">حدد المستلم </label>
                                <div class="col-sm-10">
                                <select  class="custom-select form-control" name="type" id="type">
                                    <option selected disabled>اختر...</option>
                                    <option value="0">الكل</option>
                                    <option value="1">استاذ</option>
                                    <option value="2">طالب</option>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">الاساتذة</label>
                                <div class="col-sm-10">
                                <select disabled class="custom-select form-control" name="teachers_id" id="tech">
                                <option  value="" selected="" disabled=""></option>
                                    @foreach($teachers as $teacher)
                                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">الطلاب</label>
                                <div class="col-sm-10">
                                <select disabled class="custom-select form-control" name="students_id" id="stud">
                                <option  value="" selected="" disabled=""></option>
                                @foreach($students as $student)
                                    <option value="{{$student->id}}">{{$student->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>



                            <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">اضافة </button>
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
                                <strong>{{ session('success')}}</strong>  <a href="#" class="alert-link"></a>
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
