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
            <div class="form-group">
                <select class="custom-select form-control" name="class_name">
                  <option selected disabled>الصف</option>
                  <option value="الأول">الأول</option>
                  <option value="الثاني">الثاني</option>
                  <option value="الثالث">الثالث</option>
                  <option value="الرابع">الرابع</option>
                  <option value="الخامس">الخامس</option>
                  <option value="السادس">السادس</option>
                </select>
            </div>
    </div>
{{-- End Classes --}}

{{-- Start Days --}}
    <div class="col-md">
        <div class="form-group">
            <select class="custom-select form-control" name="days">
              <option selected disabled>اليوم</option>
              <option value="السبت">السبت</option>
              <option value="الأحد">الأحد</option>
              <option value="الأثنين">الأثنين</option>
              <option value="الثلاثاء">الثلاثاء</option>
              <option value="الاربعاء">الاربعاء</option>
              <option value="الخميس">الخميس</option>
            </select>
          </div>
    </div>
{{-- End Days --}}

{{-- Start Lesson --}}
    <div class="col-md">
            <div class="form-group">
                <select class="custom-select form-control" name="lesson">
                  <option selected disabled>الدرس</option>
                  <option value="1">الأول</option>
                  <option value="2">الثاني</option>
                  <option value="3">الثالث</option>
                  <option value="4">الرابع</option>
                  <option value="5">الخامس</option>
                  <option value="6">السادس</option>
                </select>
            </div>
    </div>
{{-- End Lesson --}}

{{-- Start Materals --}}
    <div class="col-md">
        <div class="form-group">
            <select class="custom-select form-control" name="material_name">
              <option selected disabled>المواد الدراسية</option>
                <option class="font-weight-bold" disabled>مواد الصف الأول</option>
                  @foreach ($material as $name)
                    @if($name->class_name == 'الاول')
                      <option value="{{$name->material_name}}">{{$name->material_name}}</option>
                    @endif
                  @endforeach
                <option class="font-weight-bold" disabled>مواد الصف الثاني</option>
                  @foreach ($material as $name)
                    @if($name->class_name == 'الثاني')
                      <option value="{{$name->material_name}}">{{$name->material_name}}</option>
                    @endif
                  @endforeach
                <option class="font-weight-bold" disabled>مواد الصف الثالث</option>
                  @foreach ($material as $name)
                    @if($name->class_name == 'الثالث')
                      <option value="{{$name->material_name}}">{{$name->material_name}}</option>
                    @endif
                  @endforeach
                <option class="font-weight-bold" disabled>مواد الصف الرابع</option>
                  @foreach ($material as $name)
                    @if($name->class_name == 'الرابع')
                      <option value="{{$name->material_name}}">{{$name->material_name}}</option>
                    @endif
                  @endforeach
                <option class="font-weight-bold" disabled>مواد الصف الخامس</option>
                  @foreach ($material as $name)
                    @if($name->class_name == 'الخامس')
                      <option value="{{$name->material_name}}">{{$name->material_name}}</option>
                    @endif
                  @endforeach
                <option class="font-weight-bold" disabled>مواد الصف السادس</option>
                  @foreach ($material as $name)
                    @if($name->class_name == 'السادس')
                      <option value="{{$name->material_name}}">{{$name->material_name}}</option>
                    @endif
                  @endforeach
            </select>
          </div>
    </div>
{{-- End Materals --}}

{{-- Start Teachers --}}
    <div class="col-md">
        <div class="form-group mb-1">
            <select class="custom-select form-control" name="name">
              <option selected disabled>الأستاذ</option>
              @foreach ($teachers as $teacher)
                  <option value="{{$teacher->name}}">{{$teacher->name}}</option>
              @endforeach
            </select>
          </div>
    </div>
{{-- End Teachers --}}

{{-- Start From Time --}}
    <div class="col-md" style="margin-bottom:0px">
            <div class="form-group mb-0">
                <label for="">من</label>
                <input type="time" class="form-control" style="font-size:12px" name="time_from">
            </div>
    </div>
{{-- End From Time --}}

{{-- Start To Time --}}
    <div class="col-md" style="margin-bottom:0px">
        <label for="">الى</label>
            <div class="form-group mb-0">
              <input type="time" class="form-control" style="font-size:12px" name="time_to">
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
                @foreach ($tables as $table)
                  @if($table->class_name == 'الأول')
                    <tr>
                      <th>{{$table->days}}</th>
                      @if ($table->lesson == 1)
                        <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                      @else
                      <th>-</th>
                      @endif

                      @if($table->lesson == 2) 
                        <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                      @else
                      <th>-</th>
                      @endif

                      @if($table->lesson == 3)  
                        <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                      @else
                      <th>-</th>
                      @endif

                      @if($table->lesson == 4)  
                        <th><label class="text-danger">{{$table->material_name}}</label></label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                      @else
                      <th>-</th>
                      @endif

                      @if($table->lesson == 5)
                        <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                      @else
                      <th>-</th>
                      @endif

                      @if($table->lesson == 6)  
                        <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                      @else
                      <th>-</th>
                      @endif
                    </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
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
              @foreach ($tables as $table)
                @if($table->class_name == 'الثاني')
                  <tr>
                    <th>{{$table->days}}</th>
                    @if ($table->lesson == 1)
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 2) 
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 3)  
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 4)  
                      <th><label class="text-danger">{{$table->material_name}}</label></label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 5)
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 6)  
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif
                  </tr>
                @endif
              @endforeach
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
              @foreach ($tables as $table)
                @if($table->class_name == 'الثالث')
                  <tr>
                    <th>{{$table->days}}</th>
                    @if ($table->lesson == 1)
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 2) 
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 3)  
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 4)  
                      <th><label class="text-danger">{{$table->material_name}}</label></label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 5)
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 6)  
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif
                  </tr>
                @endif
              @endforeach
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
              @foreach ($tables as $table)
                @if($table->class_name == 'الرابع')
                  <tr>
                    <th>{{$table->days}}</th>
                    @if ($table->lesson == 1)
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 2) 
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 3)  
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 4)  
                      <th><label class="text-danger">{{$table->material_name}}</label></label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 5)
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 6)  
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif
                  </tr>
                @endif
              @endforeach
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
              @foreach ($tables as $table)
                @if($table->class_name == 'الخامس')
                  <tr>
                    <th>{{$table->days}}</th>
                    @if ($table->lesson == 1)
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 2) 
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 3)  
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 4)  
                      <th><label class="text-danger">{{$table->material_name}}</label></label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 5)
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 6)  
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif
                  </tr>
                @endif
              @endforeach
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
              @foreach ($tables as $table)
                @if($table->class_name == 'السادس')
                  <tr>
                    <th>{{$table->days}}</th>
                    @if ($table->lesson == 1)
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 2) 
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 3)  
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 4)  
                      <th><label class="text-danger">{{$table->material_name}}</label></label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 5)
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif

                    @if($table->lesson == 6)  
                      <th><label class="text-danger">{{$table->material_name}}</label><br>{{$table->name}}<br><a href="#" class="badge badge-info">{{$table->time_to}}</a>-<a href="#" class="badge badge-info">{{$table->time_from}}</a></th>
                    @else
                    <th>-</th>
                    @endif
                  </tr>
                @endif
              @endforeach
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