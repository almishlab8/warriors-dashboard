@extends('layouts.app')
@section('content')

@include('layouts.messages')

<div class="container">
  

<div style="padding-bottom:5%;">
  <a  href="/users/create" class="btn btn-success"><i class="ficon icon-plus"></i> آضافة مستخدم</a>
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th >Name</th>
        <th >Email</th>
        <th >Role</th>
        <th >Created At</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
        <th>{{$user->name}}</th>
        <td>{{$user->email}}</td>
        <td> 
                                             
            @if ($user->admin == 1)
            <a class="" href="{{route('users.not.admin',['id' => $user->id])}}">
                    delete admin
            </a>
            @elseif($user->admin == 2)
            <a class="" href="{{route('users.not.admin',['id' => $user->id])}}">
                delete teacher
            </a>
            @else
                
                <a class="" href="{{route('users.admin',['id' => $user->id])}}">
                        Admin
                </a> | 
                <a class="" href="{{route('users.teacher',['id' => $user->id])}}">
                    Teacher
            </a>
            @endif
        </td>

        <td>{{$user->created_at}}</td>
        <td><a  href="/users/{{$user->id}}/edit" class="btn btn-primary">Edit</a>
        </td>

        <td>

          

          <form class="delete" action="{{ action('UsersController@destroy',$user->id) }}" method="POST" onsubmit ='return confirmDelete()'>
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}
              <input type="submit" value="حذف" class="btn btn-danger">
          </form>
      
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

@stop
