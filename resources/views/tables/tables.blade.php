@extends('layouts.app')
@section('content')
{{-- @include('layouts.messages') --}}
<div class="container">
{{-- Start Title --}}
    <h1 class="my-2">الجدول الأسبوعي</h1>
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

<div class="row">
{{-- Start Form Created =================================================--}}
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary ml-1 mb-1" data-toggle="modal" data-target="#exampleModal">
  أضافة
</button>
{{-- {{dd($all)}} --}}
<!-- Start Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">أنشاء معلومات جديدة</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        


  <form action="{{route('tables.store')}}" method="POST">
    @csrf
    {{-- @method('PATCH') --}}
{{-- Start Classes --}}
    <div class="col-md">
      <label for="">الصفوف:</label>
            <div class="form-group">
                <select name="class_id_table" class="form-control" required>
                    <option value=""> اختر صف </option>
                    @foreach ($countries as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>

                {{-- <select class="custom-select form-control" name="class_id_table" required>
                  <option  value="">اختر واحده</option>
                  @foreach ($classes as $classe)
                    <option value="{{$classe->id}}">{{$classe->class_name}}</option>
                  @endforeach
                </select> --}}
            </div>
    </div>
{{-- End Classes --}}

{{-- Start Materals --}}
<div class="col-md">
  <label for="">المواد الدراسية:</label>

  <div class="form-group">
          <select name="material_id_table" class="form-control" required>
            <option>اختر المادة</option>
          </select>
    {{-- <select class="custom-select form-control" name="material_id_table" required>
        <option value="">المواد الدراسية</option>
            @foreach ($material as $item)
              <option value="{{$item->id}}">
           @if ($item->class_id == 1)
           <strong> الصف {{$item->class->class_name}}</strong>  :  {{$item->material_name}} 
           @endif
              </option>
            @endforeach
      </select> --}}
    </div>
</div>
{{-- End Materals --}}


{{-- Start Days --}}
    <div class="col-md">
        <label for="">الايام:</label>

        <div class="form-group">
            <select class="custom-select form-control" name="day_id" required>
              <option value="">اليوم</option>
              <option value="1">السبت</option>
              <option value="2">الأحد</option>
              <option value="3">الأثنين</option>
              <option value="4">الثلاثاء</option>
              <option value="5">الاربعاء</option>
              <option value="6">الخميس</option>
            </select>
          </div>
    </div>
{{-- End Days --}}

{{-- Start Lesson --}}
    <div class="col-md">
        <label for="">الدروس:</label>

        <div class="form-group">
            <select class="custom-select form-control" name="lesson_id" required>
              <option value="">الدروس</option>
              <option value="1">الاول</option>
              <option value="2">الثاني</option>
              <option value="3">الثالث</option>
              <option value="4">الرابع</option>
              <option value="5">الخامس</option>
              <option value="6">السادس</option>
            </select>
          </div>
    </div>
{{-- End Lesson --}}



{{-- Start Teachers --}}
    <div class="col-md">
        <label for="">الاستاذ:</label>

        <div class="form-group mb-1">
            <select class="custom-select form-control" name="teacher_id" required>
              <option value="">الأستاذ</option>
              @foreach ($teachers as $teacher)
                  <option value="{{$teacher->id}}">{{$teacher->name}}</option>
              @endforeach
            </select>
          </div>
    </div>
{{-- End Teachers --}}

{{-- Start From Time --}}
    <div class="col-md" style="margin-bottom:0px">
        <label for="">وقت بدء المحاضرة:</label>
            <div class="form-group mb-0">
                <input type="time" class="form-control" style="font-size:12px" name="time_from" required>
            </div>
    </div>
{{-- End From Time --}}

{{-- Start To Time --}}
    <div class="col-md" style="margin-bottom:0px">
        <label for="">وقت نهاية المحاضرة:</label>
            <div class="form-group mb-0">
              <input type="time" class="form-control" style="font-size:12px" name="time_to" required>
            </div>
    </div>
{{-- End To Time --}}

  
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">أغلاق</button>
        <button type="submit" class="btn btn-primary">أرسال للجدول</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
</form>
{{-- End Form Created ========================================================= --}}
</div>


<div class="accordion" id="accordionExample">
{{--  جدول الصف الاول --}}  
    <div class="card mb-0">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
             الأول
          </button>
        </h2>
      </div>
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
{{-- Start Table --}}
@include('tables.one')
{{-- End Table --}}
        </div>
      </div>
    </div>
{{--  جدول الصف الثاني --}}  

    <div class="card mb-0">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
             الثاني
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
{{-- Start Table --}}
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">اليوم</th>
                <th scope="col">1</th>
                <th scope="col">2</th>
                <th scope="col">3</th>
                <th scope="col">4</th>
                <th scope="col">5</th>
                <th scope="col">6</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
{{-- End Table --}}
        </div>
      </div>
    </div>
{{--  جدول الصف الثالث --}}  

    <div class="card mb-0">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
             الثالث
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
{{-- Start Table --}}
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">اليوم</th>
                <th scope="col">1</th>
                <th scope="col">2</th>
                <th scope="col">3</th>
                <th scope="col">4</th>
                <th scope="col">5</th>
                <th scope="col">6</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
{{-- End Table --}}
        </div>
      </div>
    </div>
{{--  جدول الصف الرابع --}}  

    <div class="card mb-0">
      <div class="card-header" id="headingFour">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
             الرابع
          </button>
        </h2>
      </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
        <div class="card-body">
{{-- Start Table --}}
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">اليوم</th>
                <th scope="col">1</th>
                <th scope="col">2</th>
                <th scope="col">3</th>
                <th scope="col">4</th>
                <th scope="col">5</th>
                <th scope="col">6</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
{{-- End Table --}}
        </div>
      </div>
    </div>
{{--  جدول الصف الخامس --}}  

    <div class="card mb-0">
      <div class="card-header" id="headingFive">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
             الخامس
          </button>
        </h2>
      </div>
      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
        <div class="card-body">
{{-- Start Table --}}
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">اليوم</th>
                <th scope="col">1</th>
                <th scope="col">2</th>
                <th scope="col">3</th>
                <th scope="col">4</th>
                <th scope="col">5</th>
                <th scope="col">6</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
{{-- End Table --}}
        </div>
      </div>
    </div>
{{--  جدول الصف السادس --}}  

    <div class="card mb-0">
      <div class="card-header" id="headingSix">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
             السادس
          </button>
        </h2>
      </div>
      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
        <div class="card-body">
{{-- Start Table --}}
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">اليوم</th>
                <th scope="col">1</th>
                <th scope="col">2</th>
                <th scope="col">3</th>
                <th scope="col">4</th>
                <th scope="col">5</th>
                <th scope="col">6</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
{{-- End Table --}}
        </div>
      </div>
    </div>
  </div>
{{-- End Content --}}
</div>
@endsection

@push('js')
<script type="text/javascript">
  jQuery(document).ready(function ()
  {
          jQuery('select[name="class_id_table"]').on('change',function(){
             var countryID = jQuery(this).val();
             if(countryID)
             {
                jQuery.ajax({
                   url : 'dropdownlist/getstates/' +countryID,
                   type : "GET",
                   dataType : "json",
                   success:function(data)
                   {
                      //console.log(data);
                      jQuery('select[name="material_id_table"]').empty();
                      jQuery.each(data, function(key,value){
                         $('select[name="material_id_table"]').append('<option value="'+ key +'">'+ value +'</option>');
                      });
                   }
                });
             }
             else
             {
                $('select[name="material_id_table"]').empty();
             }
          });
  });
</script>    
@endpush