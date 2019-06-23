@extends('admin.layout.app')
@section('content')

<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-home"></i> الدرجات اليومية</h4>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div class="form-body">
                            <div class="student-degreeday">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                                <a href="#">
                                                    <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                                                    <br><br>
                                                    <span>اضافةالدرجات</span>
                                                    <br><br>
                                                </a>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                <a href="#">
                                                    <i class="fa fa-edit fa-5x" aria-hidden="true"></i>
                                                    <br><br>
                                                    <span>تعديل الدرجات</span>
                                                    <br><br>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <a href="#">
                                                    <i class="fa fa-list fa-5x" aria-hidden="true"></i>
                                                    <br><br>
                                                    <span>عرض الدرجات</span>
                                                    <br><br>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <a href="#">
                                                    <i class="fa fa-address-card fa-5x" aria-hidden="true"></i>
                                                    <br><br>
                                                    <span>طباعة الكارتات</span>
                                                    <br><br>
                                                </a>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-lg-12">
                                            <div class="alert alert-danger styday">
                                                
                                                
                                                هنا يمكن استعراض الدرجات الشهرية القديمة لكن لارسال درجات جديدة <a href="/Student-DegreeDay-link" class="btn btn-info" style="color:aliceblue"> اضفط هنا</a>
                                            
                                            </div>

                                            


                                            <br><br>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="col-lg-3">
                                                <form action="">
                                                    <div class="form-group">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">اختر شعبة</option>
                                                            <option value="">1</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">اختر شعبة</option>
                                                            <option value="">1</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">اختر شعبة</option>
                                                            <option value="">1</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">اختر شعبة</option>
                                                            <option value="">1</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">اختر شعبة</option>
                                                            <option value="">1</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="ادخل اسم الطالب" name="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" value="بحث" class="form-control btn btn-success">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-9">
                                                    <table
                                                    id="dataTable"
                                                    class="table table-striped table-bordered table-responsive"
                                                    style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>اسم الاستاذ</th>
                                                                <th>اسم السمتخدم</th>
                                                                <th>كلمة المرور</th>
                                                                <th>خيارات</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>ahmed</td>
                                                                <td>employee1@not</td>
                                                                <td>uVc9EawDSL9Z</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-primary "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
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
        </div>
    </div>
</section>

@endsection