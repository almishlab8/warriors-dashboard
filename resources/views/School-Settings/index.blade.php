@extends('admin.layout.app')
@section('content')
<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">المواد الدراسية  <button data-toggle="modal" data-target="#add_materails" class="btn btn-success" style="margin-right: 10px;"><i class="icon-plus-circle"></i></button> 
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
                                                            
                                    <div class="row match-height">
                                        <div class="col-lg-12 col-md-12">
                                        <div class="table-responsive">
                                                    <table class="table ">
                                                        <thead class="thead-inverse">
                                                        <tr>
                                                                <th style="text-align:center;font-weight: bold;">اسم المادة </th>
                                                                <th style="text-align:center;font-weight: bold;">الاجراء</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                <tr style="  text-align: center;
                                                                              font-size: 12pt;">
                                                                    <td style="    font-weight: bold;">الرياضيات</td>
                                                                    <td>
                                                                        <button class="btn btn-info"  data-toggle="modal" data-target="#edit_className"><i class="icon-edit2"></i></button>
                                                                        <button class="btn btn-danger"><i class="icon-trash-o"></i></button>
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
</section>


<section id="static-demo">
    <div class="container">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">الشعب الدراسية <button  data-toggle="modal" data-target="#add_className" class="btn btn-success" style="margin-right: 10px;"><i class="icon-plus-circle"></i></button> 
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
                                                            
                                    <div class="row match-height">
                                        <div class="col-lg-12 col-md-12">
                                        <div class="table-responsive">
                                                    <table class="table ">
                                                        <thead class="thead-inverse">
                                                        <tr >
                                                                <th style="text-align:center;font-weight: bold;">اسم الصف / الشعبة </th>
                                                                <th style="text-align:center;font-weight: bold;">الاجراء</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                <tr style="  text-align: center;
                                                                              font-size: 12pt;">
                                                                    <td style="    font-weight: bold;">االاول ب</td>
                                                                    <td>
                                                                        <button class="btn btn-info"  data-toggle="modal" data-target="#edit_className"><i class="icon-edit2"></i></button>
                                                                        <button class="btn btn-danger"><i class="icon-trash-o"></i></button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                            </div>
                                        </div>
                                    
		                    </div>
	</div>
</section>
<!-- Anchors and buttons end -->
  

                               </div>
                </div>
            </div>
    </div>
</section>



<!-- ==========================================model for add materails========================================= -->

<div class="modal fade text-xs-left" id="add_materails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													  <span aria-hidden="true">&times;</span>
													</button>
													<label class="modal-title text-text-bold-600" id="myModalLabel33">Inline Login Form</label>
												</div>
												<form action="#">
											  	  <div class="modal-body">
													<label>Email: </label>
													<div class="form-group">
														<input type="text" placeholder="Email Address" class="form-control">
													</div>

													<label>Password: </label>
													<div class="form-group">
														<input type="password" placeholder="Password" class="form-control">
													</div>
												  </div>
												  <div class="modal-footer">
													<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
													<input type="submit" class="btn btn-outline-primary btn-lg" value="Save">
												  </div>
												</form>
											</div>
										</div>
									</div>



                                    
<!-- ==========================================model for edit materails========================================= -->

<div class="modal fade text-xs-left" id="edit_materails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													  <span aria-hidden="true">&times;</span>
													</button>
													<label class="modal-title text-text-bold-600" id="myModalLabel33">Inline Login Form</label>
												</div>
												<form action="#">
											  	  <div class="modal-body">
													<label>Email: </label>
													<div class="form-group">
														<input type="text" placeholder="Email Address" class="form-control">
													</div>

													<label>Password: </label>
													<div class="form-group">
														<input type="password" placeholder="Password" class="form-control">
													</div>
												  </div>
												  <div class="modal-footer">
													<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
													<input type="submit" class="btn btn-outline-primary btn-lg" value="Login">
												  </div>
												</form>
											</div>
										</div>
									</div>


                                    
                                    
<!-- ==========================================model for add className========================================= -->

<div class="modal fade text-xs-left" id="add_className" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													  <span aria-hidden="true">&times;</span>
													</button>
													<label class="modal-title text-text-bold-600" id="myModalLabel33">Inline Login Form</label>
												</div>
												<form action="#">
											  	  <div class="modal-body">
													<label>Email: </label>
													<div class="form-group">
														<input type="text" placeholder="Email Address" class="form-control">
													</div>

													<label>Password: </label>
													<div class="form-group">
														<input type="password" placeholder="Password" class="form-control">
													</div>
												  </div>
												  <div class="modal-footer">
													<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
													<input type="submit" class="btn btn-outline-primary btn-lg" value="Login">
												  </div>
												</form>
											</div>
										</div>
									</div>


                                         
                                    
<!-- ==========================================model for edit className========================================= -->

<div class="modal fade text-xs-left" id="edit_className" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													  <span aria-hidden="true">&times;</span>
													</button>
													<label class="modal-title text-text-bold-600" id="myModalLabel33">Inline Login Form</label>
												</div>
												<form action="#">
											  	  <div class="modal-body">
													<label>Email: </label>
													<div class="form-group">
														<input type="text" placeholder="Email Address" class="form-control">
													</div>

													<label>Password: </label>
													<div class="form-group">
														<input type="password" placeholder="Password" class="form-control">
													</div>
												  </div>
												  <div class="modal-footer">
													<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
													<input type="submit" class="btn btn-outline-primary btn-lg" value="Login">
												  </div>
												</form>
											</div>
										</div>
									</div>

@endsection