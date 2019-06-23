@extends('admin.layout.app')

@section('content')
<style>
label {
    font-weight: bold;
}
</style>
<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> احدث تبليغات الصفوف <button class="btn btn-success" data-toggle="modal" data-target="#add_report"><i class="icon-plus-circle"></i></button>
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
                      

    
                    <div class="col-md-12" >
                            <div class="form-body">
                                <table
                                    id="dataTable"
                                    class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ت</th>
                                            <th>الصف</th>
                                            <th>عنوان التبليغ</th>
                                            <th>التاريخ</th>
                                            <th>نص التبليغ</th>
                                            <th>تعديل</th>
                                            <th>حذف</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>class</td>
                                            <td>test </td>
                                            <td>12-1-1111 </td>
                                            <td> files testfiles testfiles testfiles testfiles testfiles testfiles testfiles testfiles testfiles testfiles testfiles testfiles test</td>
                                            <td>
                                                    <button class="btn btn-info"  data-toggle="modal" data-target="#edit_report"><i class="icon-edit2"></i></button></td>
                                                  <td>  <button class="btn btn-danger"><i class="icon-trash-o"></i></button> </td>
                                                </td>                
                                        </tr>

                                                    
                                                     </tbody>
                                                    <tfoot>
                                                         <tr>
                                                         <th>ت</th>
                                            <th>الصف</th>
                                            <th>عنوان التبليغ</th>
                                            <th>التاريخ</th>
                                            <th>نص التبليغ</th>
                                            <th>تعديل</th>
                                            <th>حذف</th>

                                                        </tr>
                                                     </tfoot>
                                       </table>
                                       
                                       
                                       
                                </div>

                            </div>

                        </div>
                        </div> </div>
                </div>
        </div>
    </div>
</section>


                                 
                                    
<!-- ==========================================model for add className========================================= -->

<div class="modal fade text-xs-left" id="add_report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <label class="modal-title text-text-bold-600" id="myModalLabel33">Inline Login Form</label>
            </div>
            <div class="container">
            <div class="row">
                
                <br><br>
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
                        <div class="form-group">
                        <label for="projectinput5">عنوان التبلغ
                            </label>
                    <input type="text" class="form-control" placeholder="عنوان التبلغ">
                </div>
            </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="form-group">
                    <label class="label-control">صورة
                        </label>
                   
                <input type="file"  class="form-control"  >
            </div>
            </div>
        </div>
            <div class="row">
                <div class="container">
                        <div class="form-group">
                                <label class="label-control">التبلغ
                                    </label>
                               
                           <textarea name="" id="" cols="30" rows="10" class="form-control square" placeholder="أكتب التبلغ ...."></textarea>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                <button class="btn-block btn btn-primary">save <i class="icon-check"></i></button>
            </div>
            </div>
            <br>
        </div>
        </div>
    </div>
</div>

<!-- ========================================EDIT THE REPORT ======================-->


                               
                    
<div class="modal fade text-xs-left" id="edit_report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">Inline Login Form</label>
                </div>
                <div class="container">
                <div class="row">
                    
                    <br><br>
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
                    <div class="col-md-4">
                            <div class="form-group">
                            <label for="projectinput5">عنوان التبلغ
                                </label>
                        <input type="text" class="form-control" placeholder="عنوان التبلغ">
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="form-group">
                        <label class="label-control">صورة
                            </label>
                       
                    <input type="file"  class="form-control"  >
                </div>
                </div>
            </div>
                <div class="row">
                    <div class="container">
                            <div class="form-group">
                                    <label class="label-control">التبلغ
                                        </label>
                                   
                               <textarea name="" id="" cols="30" rows="10" class="form-control square" placeholder="أكتب التبلغ ...."></textarea>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                    <button class="btn-block btn btn-primary">save <i class="icon-check"></i></button>
                </div>
                </div>
                <br>
            </div>
            </div>
        </div>
    </div>
    
    

     

@endsection