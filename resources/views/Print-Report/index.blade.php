@extends('admin.layout.app')
@section('content')
<div class="Print-Report">
    <section id="static-demo">
            <div class="container">
                <div class="row ">
                    <div class="card">
                        <div class="card-header">
                            <!-- start Box Action -->
                            <div class="box-action">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <a href="#">
                                            <i class="fa fa-credit-card fa-5x" aria-hidden="true"></i>
                                            <br><br>
                                            <span>حسابات الطلبة</span>
                                            <br><br>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <a href="#">
                                            <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                                            <br><br>
                                            <span>اسماء الطلبة</span>
                                            <br><br>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <a href="#">
                                            <i class="fa fa-book fa-5x" aria-hidden="true"></i>
                                            <br><br>
                                            <span>تأييد الطلبة</span>
                                            <br><br>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <a href="#">
                                            <i class="fa fa-address-card fa-5x" aria-hidden="true"></i>
                                            <br><br>
                                            <span>طباعة هويات الطلبة</span>
                                            <br><br>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <a href="#">
                                            <i class="fa fa-clipboard fa-5x" aria-hidden="true"></i>
                                            <br><br>
                                            <span>طباعة الكارتات</span>
                                            
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end Box Action -->
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <div class="form-body">
                                    <!-- start Box Information -->
                                    <div class="box-information">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <h4>طباعة حسابات الطلبة</h4>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">اختر صف</option>
                                                        <option value="">الاول الابتدائي</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">اختر شعبة</option>
                                                        <option value="">1</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <input type="text" placeholder="ادخل اسم الطالب" name="" class="form-control">
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <input type="submit" value="بحث" class="form-control btn btn-success">
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <button class="btn btn-info" ><i class="fa fa-file-word-o" aria-hidden="true"></i></button>
                                                    <button class="btn btn-primary"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end Box Information -->



                                        <!-- Start Box Results -->
                                            <div class="box-results"></div>
                                        <!-- StarEndt Box Results -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
@endsection