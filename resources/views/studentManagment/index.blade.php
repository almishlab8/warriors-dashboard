@extends('admin.layout.app')

@section('content')
<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">النتائج
                    </h4>
                    <a class="heading-elements-toggle">
                        <i class="icon-ellipsis font-medium-3"></i>
                    </a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <a data-action="collapse">
                                    <i class="icon-minus4"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="reload">
                                    <i class="icon-reload"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="expand">
                                    <i class="icon-expand2"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="close">
                                    <i class="icon-cross2"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                       
<div class="row">
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="pink">278</h3>
                            <span>عدد الطلاب المتاحين </span>
                        </div>
                        <div class="media-right media-middle" style="color:#E91E63">
                            <i class="icon-bag2  font-large-2 float-xs-right" ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="teal">156</h3>
                            <span>الطلاب الغير مفعلين </span>
                        </div>
                        <div class="media-right media-middle" style="color:#009688">
                            <i class="icon-user1 teal font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="deep-orange">64.89 %</h3>
                            <span>الطلاب المفعلين</span>
                        </div>
                        <div class="media-right media-middle" style="color:#FF5722">
                            <i class="icon-diagram deep-orange font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="cyan">423</h3>
                            <span>عدد الطلاب الكلي</span>
                        </div>
                        <div class="media-right media-middle" style="color:#E91E63">
                            <i class="icon-ios-help-outline cyan font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

                    </div>
                </div>
            </div>
    </div>
</div>
</section>





<br>
<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">النتائج
                    </h4>
                    <a class="heading-elements-toggle">
                        <i class="icon-ellipsis font-medium-3"></i>
                    </a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <a data-action="collapse">
                                    <i class="icon-minus4"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="reload">
                                    <i class="icon-reload"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="expand">
                                    <i class="icon-expand2"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="close">
                                    <i class="icon-cross2"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <p></p>
                        <div class="form-body">
                            <table
                                id="dataTable"
                                class="table table-striped table-bordered"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ت</th>
                                        <th>اسم الطالب
                                        </th>
                                        <th>التعليق</th>
                                        <th>الحالة</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>علي محمد
                                        </td>
                                        <td>
                                            <input
                                                type="text"
                                                id="projectinput1"
                                                class="form-control"
                                                placeholder="First Name"
                                                name="fname"></td>
                                            <td>
                                                <div class="input-group">
                                                    <label class="display-inline-block custom-control custom-radio ml-1">
                                                        <input type="radio" name="customer1" checked="checked" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">حاضر
                                                            </span>
                                                        </label>
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input
                                                                type="radio"
                                                                name="customer1"
                                                                
                                                                class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">غائب
                                                                </span>
                                                            </label>
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input
                                                                    type="radio"
                                                                    name="customer1"
                                                                  
                                                                    class="custom-control-input">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description ml-0">
                                                                        مجاز
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>

                                                    </tr>

                                                
                                                 </tbody>
                                                <tfoot>
                                                     <tr>
                                                         <th>ت</th>
                                                         <th>اسم الطالب</th>
                                                        <th>التعليق</th>
                                                        <th>الحالة</th>

                                                    </tr>
                                                 </tfoot>
                                   </table>
                                   
                                        <br><br>
                                        <button type="submit" class="btn btn-primary form-control">
                                            <i class="icon-check2"></i>
                                            Save
                                        </button>
                                   
                            </div>

                        </div>

                    </div>
                </div>
            </div>
    </div>
</div>
</section>
@endsection