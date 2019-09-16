

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> User profile</div>

                <div class="card-body container">

                    @if(count($errors)>0)
                    <ul class="navbar-nav mr-auto">
                            @foreach ($errors->all() as $error)
                            <li class="nav-item active">
                                     {{$error}}
                                  </li>
                            @endforeach
                            
                          </ul>
                          @endif
                          {!! Form::open(['action' => ['UsersController@update',$user->id], 'method'=>'PUT','enctype'=>'multipart/form-data']) !!}

                          <form action="{{ action('UsersController@index') }}" method="post" enctype="multipart/form-data" >
                            {{ csrf_field()}}
    
                            <div class="form-group">
                              <label for="name">User</label>
                              <input type="text" class="form-control" name="name"  value="{{$user->name}}">
                             </div>
                            
                             <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="text" class="form-control" name="email"  value="{{$user->email}}">
                                   </div>




                            <div class="form-group">
                                <label for="password">    (please put your password)</label>
                                <input type="password" class="form-control" name="password"  >
                                </div>
                                
                        
                            <button type="submit" class="btn btn-primary">Update</button>
                            <input type="hidden" value="{{ csrf_token() }}" name="_token">

                          </form>  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
