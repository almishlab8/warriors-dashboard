@extends('layouts.app')
@section('content')

@include('layouts.messages')

<div class="container">


<div style="padding-bottom:5%;">
  <a  href="/materials/create" class="btn btn-success"><i class="ficon icon-plus"></i> اضافة مادة جديدة</a>
</div>
@if (count($materials->all()) > 0)
<div class="table-responsive text-nowrap">
<table class="table table-striped w-auto " >
    <thead >
      <tr>
        <th>اسم المادة</th>
        <th>الصف</th>

        <th>التعديل</th>
        <th>الحذف</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($materials as $material)
        <tr>
        <td>{{$material->material_name}}</td>
        <td>{{$material->class_name}}</td>


        <td>
            <a  href="/materials/{{$material->id}}/edit" class="btn  btn-primary">تعديل</a>
        </td>

        <td>
          <form class="delete" action="{{ action('MaterialController@destroy',$material->id) }}" method="POST" onsubmit ='return confirmDelete()'>
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}
              <input type="submit" value="حذف" class="btn  btn-danger">
          </form>
        </td>
      <script>
              function confirmDelete() {
                  var result = confirm('هل انت متأكد من حذف  المادة ؟');

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
