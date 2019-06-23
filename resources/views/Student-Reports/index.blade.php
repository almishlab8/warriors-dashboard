@extends('admin.layout.app')

@section('content')
<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <!-- start Box Information -->
                    <div class="box-information">
                            <div class="row">
                                <div class="col-lg-4 col-md-2 col-sm-2">
                                    <h4><i class="fa fa-envelope" aria-hidden="true"></i>
                                        لتقارير اليومية</h4>
                                        <br><br>
                                </div>
                                <div class="col-lg-4 col-md-2 col-sm-2">
                                    <label for="dates">اختار تاريخ لعرض التقارير</label>
                                    <input type="date" name="dates" id="" class="form-control">
                                    <br><br>
                                </div>
                                <div class="col-lg-4 col-md-2 col-sm-2">
                                    <form action="">
                                        <!-- Trigger the modal with a button -->
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addreports">اضافة حسب الشعب</button>

                                        <!-- Modal -->
                                        <div id="addreports" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"><i class="fa fa-plus"></i> اضافة التقارير</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-4">
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">الصف</option>
                                                                    <option value="">الاول الابتدائي</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">الشعبة</option>
                                                                    <option value="">1</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <input type="date" name="dates" id="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col=lg-12">
                                                                <table
                                                                class="table table-striped table-bordered table-responsive"
                                                                style="width:100%">
                                                                    <thead >
                                                                        <tr>
                                                                            <th> الدرس</th>
                                                                            <th>المادة</th>
                                                                            <th>التقرير</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>الدرس الاول</td>
                                                                            <td>الرياضيات </td>
                                                                            <td>
                                                                                <textarea name="" id="" cols="30" rows="10"></textarea>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">الخروج</button>
                                                    <input type="submit" name="addhome" class="btn btn-info" value="حفظ التغيرات">
                                                </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                    <br><br>
                                </div>
                
                            </div>
                        </div>
                        <!-- end Box Information -->
            <div class="card-body collapse in">
                <div class="card-block">
                    <div class="form-body">
                        <table
                        id="dataTable"
                        class="table table-striped table-bordered table-responsive"
                        style="width:100%">
                            <thead >
                                <tr>
                                    <th>اليوم</th>
                                    <th>التاريخ</th>
                                    <th>الصف</th>
                                    <th>الشعبة</th>
                                    <th>الاجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>الاحد</td>
                                    <td>2018</td>
                                    <td>الاول الابتدائي</td>
                                    <td>1</td>
                                    <td>
                                            <form action="">
                                                    <!-- Trigger the modal with a button -->
                                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#editreports"><i class="fa fa-edit"></i></button>
            
                                                    <!-- Modal -->
                                                    <div id="editreports" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">
            
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title"><i class="fa fa-edit"></i> تعديل التقرير</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <ul class="list-unstyled">
                                                                            <li>
                                                                                <div class="form-group">
                                                                                    <label for="stage">الصف</label>
                                                                                    <input type="text" name="stage" value="الاول الابتدائي"  class="form-control">
                                                                                </div>
                                                                            </li>
                                                                            
                                                                            <li>
                                                                                <div class="form-group">
                                                                                    <label for="stage">الشعبة</label>
                                                                                    <input type="text" name="stage" value="1"  class="form-control">
                                                                                </div>
                                                                            </li>
                                                                            
                                                                            <li>
                                                                                <div class="form-group">
                                                                                    <label for="stage">المادة</label>
                                                                                    <input type="text" name="stage" value="الرياضيات"  class="form-control">
                                                                                </div>
                                                                            </li>
                                                                            
                                                                            <li>
                                                                                <div class="form-group">
                                                                                    <label for="stage">الدرس</label>
                                                                                    <input type="text" name="stage" value="الدرس الاول"  class="form-control">
                                                                                </div>
                                                                            </li>
                                                    
                                                                            <li>
                                                                                <div class="form-group">
                                                                                    <label for="stage">التقارير</label>
                                                                                    <input type="text" name="stage" value="لا يوجد"  class="form-control">
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">الخروج</button>
                                                                <input type="submit" name="addhome" class="btn btn-info" value="حفظ التغيرات">
                                                            </div>
                                                            </div>
            
                                                        </div>
                                                    </div>
                                                </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection