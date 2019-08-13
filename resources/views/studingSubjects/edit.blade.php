@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">



                    <form action="{{route('studingSubjects.update' , $studingSubject->id)}}" method="POST">
                        {{ csrf_field()}}
                        {{ method_field('PUT') }}
                        <div class="from-1">
                            <h4>تعديل واجب الطالب </h4>
                            <hr>
                            <br>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">اسم الواجب</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="inputEmail3" value="{{ $studingSubject->name }}" placeholder="ادخال اسم المادة">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">الصف</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="classes_ID">
                                        @foreach($classes as $class)
                                            <option value="{{$class->id}}"
                                            @if($studingSubject->classes_ID == $class->id)
                                            selected
                                            @endif>{{$class->class_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">الصف</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="classes_ID">
                                        @foreach($teachers as $teacher)
                                            <option value="{{$class->id}}"
                                            @if($studingSubject->teachers_id == $teacher->id)
                                            selected
                                            @endif>{{$teacher->name}}</option>
                                        @endforeach
                                    </select>
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


