@extends('layouts.app')
@section('content')

@include('layouts.messages')

<div class="container">


<div style="padding-bottom:5%;">
  <a  href="/teachers/create" class="btn btn-success"><i class="ficon icon-plus"></i> آضافةاستاذ</a>
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Birthday</th>
        <th>phone_no</th>
        <th>Address</th>
        <th>Qualifications</th>
        <th>Created_At</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
        <tr>
        <td>{{$teacher->user->name}}</td>
        <td>{{$teacher->birthday}}</td>
        <td>{{$teacher->phone_no}}</td>
        <td>{{$teacher->address}}</td>
        <td>{{$teacher->qualifications}}</td>
        <td>{{$teacher->created_at}}</td>
        <td>
            <a  href="/teachers/{{$teacher->id}}/edit" class="btn btn-primary">Edit</a>
        </td>

        <td>
          <form class="delete" action="{{ action('TeachersController@destroy',$teacher->id) }}" method="POST" onsubmit ='return confirmDelete()'>
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}
              <input type="submit" value="حذف" class="btn btn-danger">
          </form>
        </td>
      <script>
              function confirmDelete() {
                  var result = confirm('هل انت متأكد من حذف هذه الوظيفة ؟');

                  if (result) {
                          return true;
                      } else {
                          return false;
                      }
                }
      </script>
        </td>
        </tr>
        @endforeach
    </tbody>
  </table>

</div>


@endsection
