@extends('admin.layout.app')

@section('content')
<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-home"></i> عملية الارشفة والتحليل</h4>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <div class="form-body">
                            <form action="">
                                <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="هنا هنا يتم كتابة تعليمات حول الارشفة او اياً كان "></textarea>
                                <br>
                                <input type="submit" class="btn btn-info" value="الشروع بالعملية">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection