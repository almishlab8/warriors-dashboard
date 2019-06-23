@extends('admin.layout.app')

@section('content')
<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">اداريي المدرسة</h4>
                    <a href="#" class="pull-left btn btn-info"><i class="fa fa-plus"></i> اضافة موظف جديد</a>
                </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <div class="form-body">
                        <table
                        id="dataTable"
                        class="table table-striped table-bordered table-responsive"
                        style="width:100%">
                            <thead >
                                <tr>
                                    <th>اسم الاستاذ</th>
                                    <th>اسم السمتخدم</th>
                                    <th>كلمة المرور</th>
                                    <th>نوع الحساب</th>
                                    <th>مادة التخصص</th>
                                    <th>العنوان</th>
                                    <th>رقم الهاتف</th>
                                    <th>البريد الالكتروني</th>
                                    <th>خيارات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ahmed</td>
                                    <td>employee1@not</td>
                                    <td>uVc9EawDSL9Z</td>
                                    <td>مرشد صف</td>
                                    <td>لا يوجد</td>
                                    <td>bgw</td>
                                    <td>111111111</td>
                                    <td>bgw@aa.aa</td>
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
</section>
@endsection