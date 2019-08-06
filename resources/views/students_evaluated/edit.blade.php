@extends('layouts.app')

@section('content')
<form action="{{ route('students_evaluated.update' , ['id' => $edit_rating->id]) }}" method="POST" >
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="from-1">


        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">أسم الطالب </label>
          <div class="col-sm-10">
                <select class="form-control" name="students_id">
                    @foreach ($all_students as $student)
                    @if($student->id === $edit_rating->students_id)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endif
                    @endforeach
                 </select>
          </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">درجة الطالب </label>
            <div class="col-sm-10">
                <input type="text" name="mark" value="{{ $edit_rating->mark}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="درجة الطالب">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword3"  class="col-sm-2 col-form-label">وصف الطالب </label>
            <div class="col-sm-10">
                <input type="text"  name="description"  value="{{ $edit_rating->description}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="وصف الطالب">
            </div>
          </div>



        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">تحديث</button>
          </div>
        </div>


    </div>
      </form>
      @if (session('success'))
      <div class=" text-center alert alert-dismissible alert-success ">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong> تم التحديث بنجاح</strong> {{ session('success')}} <a href="#" class="alert-link"></a>
      </div>
      @endif
      @if (count($errors) > 0)
      @foreach ($errors->all() as $error )
      <div class="alert alert-danger">{{$error}}</div>
      @endforeach
      @endif


@endsection
