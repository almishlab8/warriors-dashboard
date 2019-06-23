@extends('admin.layout.app')

@section('content')
<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-home"></i> احصائيات الطالب</h4>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <form action="">
                                            <div class="col-lg-3 col-md-3">
                                                <h6>اختيار الطالب</h6>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <div class="form-group">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">اختر صف</option>
                                                        <option value="">الاول الابتدائي</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <div class="form-group">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">اختر طالب</option>
                                                        <option value="">احمد</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <input type="submit" class="btn btn-info" value="الشروع بالعملية">
                                            </div>
                                        </form>
                                    </div>
                                    <hr>

                                    <div class="col-lg-12 col-md-12">
                                        <hr>
                                        <div class="col-lg-6 col-md-6">
                                            <h2>الغيابات</h2>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <span class="pull-left">تاريخ اليوم</span>
                                        </div>
                                        <br><br>
                                        <div class="col-lg-12">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>عدد ايام الغيابات : </span>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <span>التاريخ : </span>
                                                    <span>تاريخ الغياب</span>
                                                </li>
                                                <li>
                                                    <span>التعليقات : </span>
                                                    <span> لا يوجد</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                            <hr>
                                            <div class="col-lg-6 col-md-6">
                                                <h2>الاجازات</h2>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <span class="pull-left">تاريخ اليوم</span>
                                            </div>
                                            <br><br>
                                            <div class="col-lg-12">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <span>عدد ايام الاجازات : </span>
                                                        <span>1</span>
                                                    </li>
                                                    <li>
                                                        <span>التاريخ : </span>
                                                        <span>تاريخ الاجازه</span>
                                                    </li>
                                                    <li>
                                                        <span>التعليقات : </span>
                                                        <span> لا يوجد</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    <div class="col-lg-12 col-md-12">
                                            <hr>
                                            <div class="col-lg-6 col-md-6">
                                                <h1>الدرجات اليومية والشهرية</h1>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <span class="pull-left">تاريخ اليوم</span>
                                            </div>
                                            <br><br><br>
                                            <div class="col-lg-12">
                                                <div class="col-lg-6 col-md-6">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <h3>الدرجات اليومية</h3>
                                                        </li>
                                                        <li>
                                                            <span> المواد الناجح بها : </span>
                                                            <span>8</span>
                                                        </li>
                                                        <li>
                                                            <span> المواد الراسب بها : </span>
                                                            <span> لا يوجد</span>
                                                        </li>
                                                        <li>
                                                            <ul>
                                                                <li>
                                                                    <span>اسم المادة : </span>
                                                                    <span>الرياضيات </span>
                                                                </li>
                                                                <li>
                                                                    <span>تاريخ الامتحان : </span>
                                                                    <span>تاريخ </span>
                                                                </li>
                                                                <li>
                                                                    <span>الدرجة : </span>
                                                                    <span>86 </span>
                                                                </li>
                                                                <li>
                                                                    <span>الدرجة العليا : </span>
                                                                    <span>100 </span>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <h3>الدرجات الشهرية</h3>
                                                            </li>
                                                            <li>
                                                                <span> المواد الناجح بها : </span>
                                                                <span>8</span>
                                                            </li>
                                                            <li>
                                                                <span> المواد الراسب بها : </span>
                                                                <span> لا يوجد</span>
                                                            </li>
                                                            <li>
                                                                <ul>
                                                                    <li>
                                                                        <span>اسم المادة : </span>
                                                                        <span>الرياضيات </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>تاريخ الامتحان : </span>
                                                                        <span>تاريخ </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>الدرجة : </span>
                                                                        <span>86 </span>
                                                                    </li>
                                                                    <li>
                                                                        <span>الدرجة العليا : </span>
                                                                        <span>100 </span>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <hr>
                                        <h2>المستوى الدراسي للطالب</h2>
                                        <br><br>
                                        <div class="col-lg-12">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>نسبة الحضور اليومي : </span>
                                                    <span>100%</span>
                                                </li>
                                                <li>
                                                    <span>نسبة المواد الدراسية الناجح فيها : </span>
                                                    <span>100%</span>
                                                </li>
                                                
                                            </ul>
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