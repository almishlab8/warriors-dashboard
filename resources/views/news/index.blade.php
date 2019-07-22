@extends('layouts.app')
@section('content')
{{-- @include('layouts.messages') --}}
<div class="container">
{{-- Start Title --}}
    <h1 class="my-3">عرض الأخبار</h1>
{{-- End Title --}}

    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
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

{{-- Start Table --}}
@if (count($news->all()) > 0)
   <div class="">
        <table class="table" style="background-color:#FFF">
                <thead>
                    <tr>
                        <td>الرقم</td>
                        <td>الصورة</td>
                        <td>العنوان</td>
                        <td>الوصف</td>
                        <td>تعديل</td>
                        <td>حذف</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $new)
                        <tr>
                            <td>{{  $new->id }}</td> 
                            <td><img src="{{ $new->image }}" class="rounded" alt=" ! Sorry" srcset="" width="100px" height="100px"></td> 
                            <td>{{  $new->title }}</td> 
                            <td>{{  $new->description }}</td> 
                            <td><a href="{{route('news.edit',['id' => $new->id])}}" class="btn btn-warning">تعديل</a></td> 
                            <td><a onclick="return confirm('هل أنت مُتأكد من رغبتك في حذف الخبر ؟؟');" href="{{route('news.delete',['id' => $new->id])}}" class="btn btn-danger">حذف</a></td> 
                        </tr>
                        @endforeach
                </tbody>
            </table>
            {{ $news->links() }}
   </div>
@else
    <div class="m-3">
        <label class="text-danger">{{"لا توجد اخبار لِعرضها "}}</label>
    </div>
@endif
{{-- End Table --}}

{{-- End Content --}}
</div>
@endsection