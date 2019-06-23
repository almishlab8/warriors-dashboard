@extends('admin.layout.app')

@section('content')
<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> رسائل الطلبة 
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
                       <div class="col-md-4">
                       <table
                                    id="dataTable"
                                    class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                          <th><input type="text" class="form-control" placeholder="البحث عن طالب "></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td>علي محمد
                                            </td>
                                           
                                              
                                       </table>
                       </div>

                   

    
                    <div class="col-md-8"     style="margin-top: 40px;">
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
                                            <td> </td>
                                            <td> </td>
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
                        </div> </div>
                </div>
        </div>
    </div>
</section>

@endsection