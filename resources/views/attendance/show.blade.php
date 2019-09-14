@extends('layouts.app')

@section('content')

<br><br><br><br><br>

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
    @foreach($attendance as $value)
    <tr>
    <td>{{$i}}</td>
        <td>
        @foreach($student as $item)
        @if($value->students_id == $item->id)
        {{$item->name}}
        @endif
        @endforeach
        </td>
        <td>
        <select name="status[]" id="" disabled class="form-control">

            <option @if($value->status ==1) selected @endif>حاضر</option>
            <option @if($value->status ==0) selected @endif>غائب</option>
        </select>
        </td>
        <?php $i++;?>
    </tr>
    @endforeach


        <tbody>
        <table>
        <br><br><br>

@endsection
