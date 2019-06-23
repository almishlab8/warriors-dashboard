@extends('admin.layout.app')

@section('content')
<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-home"></i> التقييم الدراسي للطلبة</h4>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div class="form-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control">
                                                <option value="">اختر صف</option>
                                                <option value="">الاول الابتدائي</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control">
                                                <option value="">اختر شعب</option>
                                                <option value="">1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2">
                                        <div class="form-group">
                                            <input type="date" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control">
                                                <option value="">اختر صف</option>
                                                <option value="">الاول الابتدائي</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2">
                                        <div class="form-group">
                                            <input type="submit" class="form-control btn btn-info" value="التقييم">
                                        </div>
                                    </div>
                                </div>
                            </form>

                            
                            <div class="reuslts hidden">
                                النتائج تظهر هنا
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection