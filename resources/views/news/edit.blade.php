@extends('layouts.app')
@section('content')
{{-- @include('layouts.messages') --}}
<div class="container">
{{-- Start Title --}}
    <h1 class="my-2">تعديل الخبر </h1>
{{-- End Title --}}
    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                    {{$error}} <br>
            @endforeach
        </div>
    @endif

    @if (Session::has('success'))
        <div id="alert" class="alert alert-success" role="alert" style="transition:3s">
            {{Session::get('success')}}
        </div>
        <script>
           var alert = document.getElementById('alert');
            setTimeout(function(){ 
                alert.style.display = "none";
            }, 3000);
        </script>
    @endif
{{-- Start Content --}}
<form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="p-3"  style="background-color:#FFF;box-shadow:2px 2px 2px #CCC">

            <div class="form-group">
                <label>صورة الخبر :</label>
                <br>
                <input type="file" class="form-control-file" name="image" alt="" id="i" style="display:none">
                <label  for="i"><img src="{{ URL::to('/') }}/upload/news/{{ $news->image }}" class="rounded" alt="{{ $news->image }}" srcset="" width="100"></label>  
                {{-- <label for="i"><img src="../../{{ $news->image }}" class="rounded" alt="{{ $news->image }}" srcset="" width="100px" height="100px"></label>   --}}
            </div>
            
            <div class="form-group" style="width: 28rem;">
                <label>العنوان :</label>
                <input type="text" class="form-control" name="title"  value="{{ old('title')  ?? $news->title }}" placeholder="اكتب عنوان للخبر ...">
            </div>
            
            <div class="form-group">
                <label>الوصف :</label>
                <textarea class="form-control" name="description"  rows="3" cols="50" placeholder="اكتب نص الخبر ...">{{ old('description')  ?? $news->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">تحديث</button>
    </div>
</form>
<a href="{{ route('news.index') }}" class="btn btn-info mt-1" style="text-align:right !important">رجوع</a>
{{-- End Content --}}
</div>
@endsection