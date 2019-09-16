@extends('layouts.app')

@section('content')
<form action="{{route('classes.store')}}" method="POST">
    {{ csrf_field() }}
    <div class="from-1">


            <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">أسم الصف</label>
          <div class="col-sm-10">
          <input type="text" name="class_name" value="{{old('class_name')}}" class="form-control" id="inputEmail3" placeholder="أسم الصف">
          </div>
        </div>

         </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">اضاقة</button>
          </div>
        </div>


    </div>
      </form>
      @if (count($errors) > 0)
      @foreach ($errors->all() as $error )
      <div class="alert alert-danger">{{$error}}</div>
      @endforeach
      @endif

      @if (session('class'))
      <div class="alert alert-dismissible alert-success text-center">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>تم اضافة الصف بنحاح</strong> {{ session('class')}} <a href="#" class="alert-link"></a>
      </div>
      @endif

@endsection
