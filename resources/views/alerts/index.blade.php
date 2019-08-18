@extends('layouts.app')
@section('content')

@include('layouts.messages')

<div class="container">


<div style="padding-bottom:5%;">
  <a  href="/alerts/create" class="btn btn-success"><i class="ficon icon-plus"></i> اضافة تبليغ جديد</a>
</div>
@if (count($alerts->all()) > 0)
<div class="table-responsive ">
<table class="table table-striped w-auto " >
    <thead >
      <tr>
        <th>التبليغ</th>
        <th>الكل</th>
        <th>الاستاذ</th>
        <th>الطالب</th>

        <th>الحذف</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($alerts as $alert)
        <tr>
        <td>{{$alert->title}}</td>
        @if($alert->for_all == 1)
          <td><i class="ficon icon-check"></td>
          <td><i class="ficon icon-check"></td>
          <td><i class="ficon icon-check"></td>
 
      @else
      <td><i class="ficon icon-android-remove"></td>

         @if($alert->teachers_id == 0)
         <td><i class="ficon icon-android-remove"></td>
         @else
         <td>{{$alert->teachers->name}}</td>
         @endif
         @if($alert->students_id == 0)
         <td><i class="ficon icon-android-remove"></td>
         @else
         <td>{{$alert->students->name}}</td>
         @endif

     @endif



        <td>
          <form class="delete" action="{{ action('AlertsContrroller@destroy',$alert->id) }}" method="POST" onsubmit ='return confirmDelete()'>
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}
              <input type="submit" value="حذف" class="btn  btn-danger">
          </form>
        </td>
      <script>
              function confirmDelete() {
                  var result = confirm('هل انت متأكد من حذف  التبليغ ؟');

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
