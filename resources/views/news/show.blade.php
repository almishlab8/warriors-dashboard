@extends('layouts.app')
@section('content')
{{-- @include('layouts.messages') --}}
<div class="container">
{{-- Start Title --}}
    <h1 class="my-2"> الخبر </h1>
{{-- End Title --}}

{{-- Start Content --}}
<div class="p-3"  style="background-color:#FFF;box-shadow:2px 2px 2px #CCC;text-align:center">
        <br>
        <img src="{{ URL::to('/') }}/upload/news/{{ $news->image }}" class="rounded"  width="500"> 
        <br>
        <p>{{$news->title}}</p>            
        <p>{{$news->description}}</p>
    </div>
    <a href="{{ route('news.index') }}" class="btn btn-info mt-1" style="text-align:right !important;">رجوع</a>
{{-- End Content --}}
</div>
@endsection