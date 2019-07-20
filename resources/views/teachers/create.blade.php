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



                    <form action="{{route('teachers.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="men">Men</option>
                                <option value="women">Women</option>
                            </select>
                        </div>



                        <div class="form-group">
                            <label for="qualifications">Qualifications</label>
                            <input type="text" class="form-control" name="qualifications" value="{{ old('qualifications') }}"  placeholder="Enter Qualifications">
                        </div>


                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address"  placeholder="Enter address">
                        </div>



                        <div class="form-group">
                            <label for="phone_no">Phone No</label>
                            <input type="text" class="form-control" name="phone_no"  placeholder="Enter Phone No">
                        </div>


                        <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <input type="date" class="form-control" name="birthday">
                        </div>


                         <div class="form-group">
                            <label for="teacher_documents">Teacher Documents</label>
                            <input type="file" class="form-control" name="teacher_documents" >
                        </div>

                        <div class="form-group">
                            <label for="teacher_certificate">Teacher Certificate</label>
                            <input type="file" class="form-control" name="teacher_certificate" >
                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>








                </div>
            </div>
        </div>
    </div>
</div>
@endsection
