@extends('admin.layout.app')
@section('content') 
<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> حضور الطلبة
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
                        <div class="col-md-3">
                        <div class="form-group">
                            <label for="projectinput5">اسم الصف
                            </label>
                            <select id="projectinput5" name="interested" class="form-control">
                                <option value="none" selected="" disabled="">   اختار الصف </option>
                                <option value="design">design</option>
                                <option value="development">development</option>
                                <option value="illustration">illustration</option>
                                <option value="branding">branding</option>
                                <option value="video">video</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="projectinput5">اسم الشعية
                            </label>
                            <select id="projectinput5" name="interested" class="form-control">
                                <option value="none" selected="" disabled=""> اختار الشعبة </option>
                                <option value="design">design</option>
                                <option value="development">development</option>
                                <option value="illustration">illustration</option>
                                <option value="branding">branding</option>
                                <option value="video">video</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="projectinput5">التاريخ
                            </label>
                            <div class="position-relative has-icon-left">
                                <input type="date" id="timesheetinput3" class="form-control" name="date">
                                    <div class="form-control-position">
                                        <i class="icon-calendar5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="projectinput5">اسم المادة
                                </label>
                                <select id="projectinput5" name="interested" class="form-control">
                                    <option value="none" selected="" disabled=""> اختار المادة </option>
                                    <option value="design">design</option>
                                    <option value="development">development</option>
                                    <option value="illustration">illustration</option>
                                    <option value="branding">branding</option>
                                    <option value="video">video</option>
                                </select>
                            </div>
                        </div>
</div>
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
</section>

<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> عرض الحضور 
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

                   

    
                    <div class="col-md-8">
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


<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> تقارير الحضور
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
                       
                       </div>

                   

    
                    <div class="col-md-8">
                          

                            </div>

                        </div>
                        </div> </div>
                </div>
        </div>
    </div>
</section>

@endsection