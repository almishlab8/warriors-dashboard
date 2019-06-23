@extends('admin.layout.app')

@section('content')
<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-10 col-md-10">
                            <h4 class="card-title"><i class="fa fa-home"></i> المناهج الالكترونية</h4>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">اضافة كتب</button>

                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><i class="fa fa-plus"></i> اضافة منهج جديد</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="book">اسم الكتاب</label>
                                                    <input type="text" name="book" class="form-control">
                                                    <br>
                                                </div>
                                                <div class="col-lg-12">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">اختر المادة</option>
                                                        <option value="">العلوم</option>
                                                    </select>
                                                    <br>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">اختر الصف</option>
                                                        <option value="">الاول الابتدائي</option>
                                                    </select>
                                                    <br>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <label for="files-use">اختيار الملف</label>
                                                    <input type="file" name="files-use" class="form-control">
                                                </div>
                                                <div class="col-lg-12">
                                                    <label for="book-use">صورة الكتاب </label>
                                                    <input type="file" name="book-use" class="form-control">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-lg-3">
                                                <span>عدد التحميلات : 2</span>
                                            </div>
                                            <div class="col-lg-9">
                                                <a href="" class="btn btn-danger">حذف</a>
                                                                                        <!-- Trigger the modal with a button -->
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myhomework">تعديل</button>

                                                <!-- Modal -->
                                                <div id="myhomework" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title"><i class="fa fa-plus"></i> تعديل الكتاب</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12">
                                                                    
                                                                        <input type="text" class="form-control" placeholder="اسم الكتاب">
                
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="submit" class="btn btn-info" value="ارسال">
                                                        </div>
                                                        </div>

                                                    </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <img src="" alt="image" >
                                        </div>
                                        <div class="card-footer">
                                            <div class="col-lg-6">
                                                <span> ثاني متوسط</span>
                                            </div>
                                            <div class="col-lg-6">
                                                <span>نحميل</span>
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
    </div>
</section>
@endsection