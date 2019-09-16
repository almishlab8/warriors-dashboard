@extends('layouts.app')
@section('content')
{{-- @include('layouts.messages') --}}
<div class="container">
{{-- Start Title --}}
    <h1 class="my-2">عرض الأخبار</h1>
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
        <table class="table table-hover table-striped" style="background-color:#FFF">
                <thead>
                    <tr style="background-color:#1d2b36;color:#FFF">
                        <td scope="col" width="8%">الرقم</td>
                        <td scope="col" width="15%">الصورة</td>
                        <td scope="col" width="20%">العنوان</td>
                        <td scope="col">الوصف</td>
                        <td scope="col" width="25%">الاجراءات</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $new)
                        <tr>
                            <td scope="row">{{  $new->id }}</td> 
                            <td><img src="{{ URL::to('/') }}/upload/news/{{ $new->image }}" class="img-thumbnail rounded" alt=" ! Sorry" srcset="" width="100"></td> 
                            <td>{{  $new->title }}</td> 
                            <td>{{  Str::limit($new->description, 100, ' ...') }}</td> 
                            <td>
                                <form action="{{ route('news.destroy', $new->id) }}" method="POST" class="mt-2">
                                    <a href="{{ route('news.show', $new->id) }}" class="btn btn-info btn-sm">مُشاهدة</a>
                                    <a href="{{ route('news.edit', $new->id) }}" class="btn btn-warning btn-sm">تعديل</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('هل أنت مُتأكد من رغبتك في حذف الخبر ؟؟');"  class="btn btn-danger btn-sm">حذف</button>
                                </form>
                            </td> 
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