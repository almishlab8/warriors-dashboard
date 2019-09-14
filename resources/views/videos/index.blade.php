@extends('layouts.app')
@section('content')

@include('layouts.messages')

<div class="container">


<div style="padding-bottom:5%;">
  <a  href="/videos/create" class="btn btn-success"><i class="ficon icon-plus"></i> اضافة فيديو جديد</a>
</div>
@if (count($videos->all()) > 0)
<div class="table-responsive text-nowrap">
<table class="table table-striped w-auto " >
    <thead >
      <tr>
        <th>عنوان الفيديو</th>
        <th>الفيديو</th>

        <th>التعديل</th>
        <th>الحذف</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($videos as $video)
        <tr>
        <td>{{$video->video_title}}</td>
        <td style="padding-top: 11px !important;">
           <iframe width="200" height="130" src="https://www.youtube.com/embed/{{$video->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </td>

        <td>
            <a  href="/videos/{{$video->id}}/edit" class="btn  btn-primary">تعديل</a>
        </td>

        <td>
          <form class="delete" action="{{ action('VideoController@destroy',$video->id) }}" method="POST" onsubmit ='return confirmDelete()'>
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}
              <input type="submit" value="حذف" class="btn  btn-danger">
          </form>
        </td>
      <script>
              function confirmDelete() {
                  var result = confirm('هل انت متأكد من حذف  الفيديو ؟');

                  if (result) {
                          return true;
                      } else {
                          return false;
                      }
                }
      </script>
        </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  </div>
  @else
    <div class="m-3">
        <label class="text-danger">{{"لا توجد بيانات لِعرضها "}}</label>
    </div>
@endif
</div>


@endsection
