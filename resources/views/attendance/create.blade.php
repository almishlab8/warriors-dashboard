@extends('layouts.app')

@section('content')

<br><br><br><br><br>
<form action="{{route('attendance.store')}}" method="post">
@csrf
<table class="table table-striped w-auto " style="font-size: 12px;">
    <thead >
            <div class="thead">
          <tr>
                <th scope="col">#</th>
                <th scope="col">اسم الطالب </th>

                <th scope="col">الحالة</th>
          </tr>
            </div>
        </thead>
        <tbody>

    <?php $i=1;?>
    @foreach($student as $value)
    <tr>
    <td>{{$i}}</td>
        <td>{{$value->name}}
        <input type="hidden" name="students_id[]" value="{{$value->id}}">
        </td>
        <td>
        <select name="status[]" id="" class="form-control">
            <option value="1" selected>حاضر</option>
            <option value="0">غائب</option>
        </select>
        </td>
        <?php $i++;?>
    </tr>
    @endforeach


        <tbody>
        <table>
        <button type="submit" class="btn btn-primary from-control" style="width:100%">حفظ</button>
        <br><br><br>
        </form>
@endsection
