@extends('admin.layout.app')

@section('content')
<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">النتائج
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
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="pink">278</h3>
                            <span>عدد الطلاب المتاحين </span>
                        </div>
                        <div class="media-right media-middle" style="color:#E91E63">
                            <i class="icon-bag2  font-large-2 float-xs-right" ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="teal">156</h3>
                            <span>الطلاب الغير مفعلين </span>
                        </div>
                        <div class="media-right media-middle" style="color:#009688">
                            <i class="icon-user1 teal font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="deep-orange">64.89 %</h3>
                            <span>الطلاب المفعلين</span>
                        </div>
                        <div class="media-right media-middle" style="color:#FF5722">
                            <i class="icon-diagram deep-orange font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="cyan">423</h3>
                            <span>عدد الطلاب الكلي</span>
                        </div>
                        <div class="media-right media-middle" style="color:#E91E63">
                            <i class="icon-ios-help-outline cyan font-large-2 float-xs-right"></i>
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