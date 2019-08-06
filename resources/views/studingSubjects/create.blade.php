@extends('layouts.app')

@section('content')






<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">




                    <form action="{{route('studingSubjects.store')}}" method="POST">
                        {{ csrf_field()}}

                        <div class="from-1">
                            <h4>اضافة واجب للطالب جديد</h4>
                            <hr>
                            <br>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">اسم الواجب</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="inputEmail3" value="{{ old('name') }}" placeholder="ادخال اسم المادة">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">الصف</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="classes_ID">
                                        @if($classes->count() > 0)
                                            @foreach ($classes as $class)
                                                <option value="{{$class->id}}">{{$class->class_name}}</option>
                                            @endforeach
                                        @else
                                            <option value=""> لا يوجد صفوف قم باضافة صف جديد</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">اسم الاستاذ</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="teachers_id">
                                        @if($teachers->count() > 0)
                                            @foreach ($teachers as $teacher)
                                                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                            @endforeach
                                        @else
                                            <option value=""> لا يوجد استاذ قم باضافة استاذ جديد </option>
                                        @endif
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
                                <strong>تم الاضافة بنحاح</strong> {{ session('success')}} <a href="#" class="alert-link"></a>
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
