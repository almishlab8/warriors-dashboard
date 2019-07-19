@extends('layouts.app')

@section('content')
<form action="{{route('students.mergestore')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="from-1">

        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">الطالب</label>
          <div class="col-sm-10">
                <select class="form-control" name="stu_id">
                    @foreach ($students as $student)
                <option value="{{$student->id}}">{{$student->name}}</option>
                    @endforeach
                 </select>
          </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">الصف</label>
            <div class="col-sm-10">
                  <select class="form-control" name="class_id">
                      @foreach ($classes as $classe)
                  <option value="{{$classe->id}}">{{$classe->class_name}}</option>
                      @endforeach
                   </select>
            </div>
          </div>


        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">اضافة</button>
          </div>
        </div>


    </div>
      </form>
      @if (session('classs'))
      <div class=" text-center alert alert-dismissible alert-success ">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>تم اضافة طالب الى صف </strong> {{ session('classs')}} <a href="#" class="alert-link"></a>
      </div>
      @endif

@endsection
