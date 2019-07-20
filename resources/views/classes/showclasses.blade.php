@extends('layouts.app')

@section('content')
<div class="container">
        <div class="table-1">

        <table class="table">
                <thead>
                  <tr>
                    <th scope="col">الصف</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($classes as $classe)
                     <tr>
                        <td>
                            {{$classe->class_name}}
                        </td>
                    <td><a class="a" href="{{route('classes.destroy' ,['id' => $classe->id])}}">حذف الصف</a></td>
                    </tr>
                    @endforeach

                </tbody>
              </table>
              @if (session('delete'))
              <div class="alert alert-dismissible alert-success ">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong class="text-center">تم الحذف بنحاح</strong> {{ session('delete')}} <a href="#" class="alert-link"></a>
              </div>
              @endif
        </div>
</div>




@endsection
