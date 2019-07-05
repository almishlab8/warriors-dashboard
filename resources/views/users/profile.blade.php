@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card container">
                <div class="card-header"> User profile</div>

                <div class="card-body">

                    @if(count($errors)>0)
                    <ul class="navbar-nav mr-auto">
                            @foreach ($errors->all() as $error)
                            <li class="nav-item active">
                                     {{$error}}
                                  </li>
                            @endforeach
                            
                          </ul>
                          @endif
                          
                          <form action="{{route('users.profile.update')}}" method="POST" enctype="multipart/form-data" >
                            {{ csrf_field()}}
    
                          
    
                            <div class="form-group">
                              <label for="name">User</label>
                              <input type="text" class="form-control" name="name"  value="{{$user->name}}">
                             </div>
                            
                             <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="email" class="form-control" name="email"  value="{{$user->email}}">
                                   </div>
                            <div class="form-group">
                                <label for="password">(please put your password)</label>
                                <input type="password" class="form-control" name="password"  >
                                </div>
    
                           
                           
                           @if ($user->profile)
                           
                           

                           <div class="form-group">
                            <label for="name">brithday</label>
                            <input type="date" class="form-control" name="brithday"  value="{{$user->profile->brithday}}">
                            </div>

                           <div class="form-group">
                            <label for="name">gender</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                     @if ($user->profile->gender == 0)
                                     <option value="1">ذكر</option>
                                     <option value="2">انثى</option>
                                     @elseif($user->profile->gender == 1)
                                     <option value="1">ذكر</option>
                                     @elseif($user->profile->gender == 2)
                                     <option value="2">انثى</option>
                                     @endif
                                  
                              </select>
                            </div>

                           <div class="form-group">
                            <label for="name">phone</label>
                            <input type="number" class="form-control" name="phone"  value="{{$user->profile->phone}}">
                            </div>

                           <div class="form-group">
                            <label for="name">status_number</label>
                            <input type="text" class="form-control" name="status_number"  value="{{$user->profile->status_number}}">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address"  value="{{$user->profile->address}}">
                                </div>

                            <div class="form-group">
                                <label for="address">Academic achievement</label>
                                <input type="text" class="form-control" name="Academic_achievement"  value="{{$user->profile->Academic_achievement}}">
                                </div>


                                <div class="container">
                                        <div class="row">
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                                                <div class="form-group">
                                                        <img src="/upload/documents/{{$user->profile->documents}}" alt="" width="25%">

                                                        <label for="documents">documents</label>
                                                        <input type="file" class="form-control-file" name="documents">
                                                      </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                                                <div class="form-group">
                                                        <img src="/upload/cv/{{$user->profile->cv}}" alt="" width="25%">

                                                        <label for="documents">cv</label>
                                                        <input type="file" class="form-control-file" name="cv">
                                                      </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                                                <div class="form-group">
                                                        <img src="/upload/graduationـcertificate/{{$user->profile->graduationـcertificate}}" alt="" width="25%">

                                                        <label for="documents">graduation certificate</label>
                                                        <input type="file" class="form-control-file" name="graduationـcertificate">
                                                      </div>
                                          </div>
                                        </div>
                                      </div>


                          
                          

                            

                           @else
                               

                           <div class="form-group">
                            <label for="name">brithday</label>
                            <input type="date" class="form-control" name="brithday"  >
                            </div>

                           <div class="form-group">
                            <label for="name">gender</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                    <option value="1">ذكر</option>
                                    <option value="2">انثى</option>
                              </select>
                            </div>

                           <div class="form-group">
                            <label for="name">phone</label>
                            <input type="number" class="form-control" name="phone"  >
                            </div>

                           <div class="form-group">
                            <label for="name">status_number</label>
                            <input type="text" class="form-control" name="status_number" >
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" >
                                </div>

                            <div class="form-group">
                                <label for="address">Academic achievement</label>
                                <input type="text" class="form-control" name="Academic_achievement"  >
                                </div>

                            <div class="form-group">
                                    <label for="documents">documents</label>
                                    <input type="file" class="form-control-file" name="documents">
                                  </div>
                            <div class="form-group">
                                    <label for="documents">cv</label>
                                    <input type="file" class="form-control-file" name="cv">
                                  </div>
                            <div class="form-group">
                                    <label for="documents">graduation certificate</label>
                                    <input type="file" class="form-control-file" name="graduationـcertificate">
                                  </div>

                           @endif
                             
                        
                            <button type="submit" class="btn btn-primary" style="text-align:center">Update</button>
                          </form>  
                         

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
