@extends('layouts.app')

@section('content')






<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">




                    <form action="{{route('student_homeworks.store')}}" method="POST">
                        {{ csrf_field()}}

                        <div class="from-1">
                            <h4>اضافة واجب للطالب جديد</h4>
                            <hr>
                            <br>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">ملاحظات للواجب</label>
                                <div class="col-sm-10">
                                    <input type="text" name="notes" class="form-control" id="inputEmail3" value="{{ old('notes') }}" placeholder="ادخال وصف مراد انجازه ">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">تاريخ تسليم الواجب</label>
                                <div class="col-sm-10">
                                    <input type="date" name="deadline_date" class="form-control" id="inputEmail3" value="{{ old('deadline_date') }}" placeholder="تاريخ الواجب">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">المواد</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="material_ID">
                                        <option value="0" disabled="" selected="">اختر المادة</option>
                                        @foreach ($materials as $material)
                                            <option value="{{$material->id}}">{{$material->material_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">الطلاب</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="student_ID">
                                        <option value="0" disabled="" selected="">اختر الطالب</option>
                                        @foreach ($students as $student)
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
