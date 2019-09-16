@extends('layouts.app')

@section('content')


<div class="container">
<div class="row">
<a href="{{route('videos.index')}}">
رجوع /
<i class="icon-film"></i>الفيديو
</a>
</div>
    <div class="row justify-content-center">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">




                    <form action="{{route('videos.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}

                        <div class="from-1">
                            <h4>اضافة فيديو جديد</h4>
                            <hr>
                            <br>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">العنوان</label>
                                <div class="col-sm-10">
                                    <input type="text" name="video_title" class="form-control" id="inputEmail3" value="{{ old('video_title') }}" placeholder="ادخال  العنوان">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">الكود الخاص باليوتيوب</label>
                                <div class="col-sm-10">
                                    <input type="text" name="video_url"class="form-control" id="inputEmail3" value="{{ old('video_url') }}" placeholder="ادخال الكود">
                                </div>
                            </div>

                            <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">اضافة </button>
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
                                <strong>{{ session('success')}}</strong>  <a href="#" class="alert-link"></a>
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
