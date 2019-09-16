@extends('layouts.app')
@section('content')
{{-- @include('layouts.messages') --}}

<div class="container">
{{-- Start Title --}}
<h1 class="my-2">أضافة الأخبار</h1>
{{-- End Title --}}

    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert" style="text-align:right !important">
            @foreach ($errors->all() as $error)
                    {{$error}} <br>
            @endforeach
        </div>
    @endif

    @if (Session::has('success'))
        <div id="alert" class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
            <script>
            var alert = document.getElementById('alert');
                setTimeout(function(){ 
                    alert.style.display = "none";
                }, 3000);
            </script>
    @endif

    <form action="{{route('news.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="p-3" style="background-color:#FFF;box-shadow:2px 2px 2px #CCC">
                <div class="form-group">
                    <label>أختر صورة للخبر : </label>
                    <br>
                    <label for="i"><img src="/upload/news/add-image.png" width="100px" height="100px" class="rounded"></label>
                    <input type="file" class="form-control-file" name="image" id="i" style="display:none">
                </div>
                
                <div class="form-group" style="width: 22rem;">
                    <label>العنوان :</label>
                    <input type="text" class="form-control" name="title" placeholder="اكتب عنوان للخبر ...">
                </div>
                
                <div class="form-group">
                    <label>الوصف :</label>
                    <textarea class="form-control" name="description" value="" rows="3" cols="10" placeholder="اكتب نص الخبر ..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
    </form>
</div>
@endsection