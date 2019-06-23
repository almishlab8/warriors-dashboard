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
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <h4><i class="fa fa-envelope" aria-hidden="true"></i>
                                        ادراج الواجب البيتي</h4>
                                        <br><br>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <select name="" id="" class="form-control">
                                        <option value="">اختر المادة</option>
                                        <option value="">العلوم</option>
                                    </select>
                                    <br><br>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <select name="" id="" class="form-control">
                                        <option value="">اختر الصف</option>
                                        <option value="">الاول الابتدائي</option>
                                    </select>
                                    <br><br>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <select name="" id="" class="form-control">
                                        <option value="">اختر الشعبة</option>
                                        <option value="">1</option>
                                    </select>
                                    <br><br>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <input type="date" name="dates" id="" class="form-control">
                                    <br><br>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <form action="">
                                        <!-- Trigger the modal with a button -->
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">اضافة واجب</button>

                                        <!-- Modal -->
                                        <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"><i class="fa fa-plus"></i> اضافة واجب</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-3">
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">اختر المادة</option>
                                                                    <option value="">العلوم</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">اختر الصف</option>
                                                                    <option value="">الاول الابتدائي</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">اختر الشعبة</option>
                                                                    <option value="">1</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                    <input type="date" name="dates" id="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col=lg-12">
                                                            <textarea name="desc" id="" cols="30" rows="10" placeholder="تفاصيل الواجب البيتي" class="form-control"></textarea>
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
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <form action="">
                                        <!-- Trigger the modal with a button -->
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myhomework">اضافة واجب حسب الحصص</button>

                                        <!-- Modal -->
                                        <div id="myhomework" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"><i class="fa fa-plus"></i> اضافة واجب حسب الحصص</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="col-lg-4">
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">اختر الصف</option>
                                                                    <option value="">الاول الابتدائي</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">اختر الشعبة</option>
                                                                    <option value="">1</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <input type="date" name="homedate">
                                                            </div>
                                                            <br><br>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <table class="table table-bordered table-responsive">
                                                                <thead>
                                                                    <tr>
                                                                        <th>الدرس</th>
                                                                        <th>المادة</th>
                                                                        <th>الواجب البيتي</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>الاول</td>
                                                                        <td>الرياضيات</td>
                                                                        <td>مبرهنة</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-info" value="ارسال">
                                                </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>

                                    <br><br>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Box Information -->
            <div class="card-body collapse in">
                <div class="card-block">
                        <h4 class="card-title">احدث الواجبات البيتية</h4>
                    <div class="form-body">
                        <table
                        id="dataTable"
                        class="table table-striped table-bordered table-responsive"
                        style="width:100%">
                            <thead >
                                <tr>
                                    <th>اسم الدرس</th>
                                    <th>الصف</th>
                                    <th>الشعبة</th>
                                    <th>تفاصيل الواجب</th>
                                    <th>تاريخ الواجب</th>
                                    <th>الاجراء</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>الرياضيات</td>
                                    <td>الاول الابتدائي</td>
                                    <td>1</td>
                                    <td>مبرهنة</td>
                                    <td>الاسبوع القادم</td>
                                    <td>نجاح</td>
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