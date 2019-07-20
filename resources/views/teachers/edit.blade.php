@extends('layouts.app')

@section('content')






<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Teacher</div>

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



                    <form action="{{route('teachers.update' , $teacher->id)}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="men"
                                @if($teacher->gender == 'men')
                                selected
                                @else
                                ''
                                @endif>Men</option>
                                <option value="women"
                                @if($teacher->gender == 'women')
                                selected
                                @else
                                ''
                                @endif>Women</option>
                            </select>
                        </div>



                        <div class="form-group">
                            <label for="qualifications">Qualifications</label>
                            <input type="text" class="form-control" name="qualifications"  value="{{$teacher->qualifications}}">
                        </div>


                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address"  value="{{$teacher->address}}">
                        </div>



                        <div class="form-group">
                            <label for="phone_no">Phone No</label>
                            <input type="text" class="form-control" name="phone_no" value="{{$teacher->phone_no}}">
                        </div>


                        <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <input type="datetime" class="form-control" name="birthday" value="{{$teacher->birthday}}">
                        </div>


                         <div class="form-group">
                            <label for="teacher_documents">Teacher Documents</label>
                            <input type="file" class="form-control" name="teacher_documents" value="{{$teacher->teacher_documents}}">
                        </div>

                        <div class="form-group">
                            <label for="teacher_certificate">Teacher Certificate</label>
                            <input type="file" class="form-control" name="teacher_certificate" value="{{$teacher->teacher_certificate}}">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>








                </div>
            </div>
        </div>
    </div>
</div>
@endsection
