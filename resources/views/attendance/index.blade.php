@extends('layouts.app')

@section('content')

<br><br><br>
<div class="form-group mx-sm-3 mb-2">

    <a href="{{route ('attendance.create')}}" class="btn btn-success">اضافة حالة </a>
  </div>
<form class="form-inline" method="get" action="{{route('attendance.search')}}">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">ادخال التاريخ</label>
    <input type="date" class="form-control" id="inputPassword2" name="date" placeholder="اكتب تاريخ الغياب">
  </div>
  <button type="submit" class="btn btn-primary mb-2">بحث</button>
</form>

<table class="table table-striped w-auto " >
    <thead >
            <div class="thead">
          <tr>
                <th scope="col">#</th>
                <th scope="col">التاريخ </th>
                <th scope="col">الاجراء</th>
          </tr>
            </div>
        </thead>
        <tbody>
        <?php $i=1;?>


    <tr>
    <td>{{$i}}</td>
        <td>{{$date}}</td>
        <td>
            <a href="{{route('attendance.show' , $date)}}" class="btn btn-info"> افتح</a>
            <a href="{{route('attendance.delete' , $date)}}" class="btn btn-danger">حذف</a>
        </td>
        <?php $i++;?>
    </tr>


        <tbody>
        <table>
@endsection
