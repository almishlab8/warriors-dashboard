@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <a href="{{route('materials.index')}}">
            رجوع /
            <i class="icon-film"></i>المواد الدراسية
        </a>
    </div>
    <div class="row justify-content-center">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">



                    <form action="{{route('materials.update' , $material->id)}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        {{ method_field('PUT') }}
                        <div class="from-1">
                            <h4>تعديل المادة </h4>
                            <hr>
                            <br>
                            
                            <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">اسم المادة</label>
                                <div class="col-sm-10">
                                    <input type="text" name="material_name" class="form-control" id="inputEmail3" value="{{ $material->material_name }}" >
                                </div>
                            </div>


                            <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">الصف</label>
                                <div class="col-sm-10">

                                <select class="form-control" name="class_name">
                                    @foreach ($classes as $classe)
                                     <option
                                     @if( $classe->class_name == $material->class_name) 
                                     selected=""
                                     @endif
                                      value="{{$classe->class_name}}">{{$classe->class_name}}</option>
                                    @endforeach
                                </select>

                                </div>
                            </div>

                   
                            <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">تحديث </button>
                            </div>
                            </div>

                            @if (count($errors) > 0)
                            @foreach ($errors->all() as $error )
                            <div class="alert alert-danger">{{$error}}</div>
                            @endforeach
                            @endif

                            @if (session('success'))
                                <div class="alert alert-dismissible alert-success text-center">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>تم التعديل بنجاح</strong> {{ session('success')}} <a href="#" class="alert-link"></a>
                                </div>
                            @endif
                        </div>
                    </form>








                </div>
            </div>
        </div>
    </div>
</div>
@endsection


