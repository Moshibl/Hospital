@extends('layouts.admin-master')
@section('css')
<!---Internal  Prism css-->
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Admin</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Departments</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-6 col-xl-3 col-md-6 col-12">
						<div class="card bg-primary-gradient text-white ">
							<div class="card-body">
								<div class="row">
									<div class="col-6">
										<div class="icon1 mt-2 text-center">
											<i class="fe fe-users tx-40"></i>
										</div>
									</div>
									<div class="col-6">
										<div class="mt-0 text-center">
											<span class="text-white">Departments</span>
											<h2 class="text-white mb-0">99</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-3 col-md-6 col-12">
						<div class="card bg-danger-gradient text-white">
							<div class="card-body">
								<div class="row">
									<div class="col-6">
										<div class="icon1 mt-2 text-center">
											<i class="fe fe-shopping-cart tx-40"></i>
										</div>
									</div>
									<div class="col-6">
										<div class="mt-0 text-center">
											<span class="text-white">Doctors</span>
											<h2 class="text-white mb-0">854</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-3 col-md-6 col-12">
						<div class="card bg-success-gradient text-white">
							<div class="card-body">
								<div class="row">
									<div class="col-6">
										<div class="icon1 mt-2 text-center">
											<i class="fe fe-bar-chart-2 tx-40"></i>
										</div>
									</div>
									<div class="col-6">
										<div class="mt-0 text-center">
											<span class="text-white">Residents</span>
											<h2 class="text-white mb-0">98K</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-3 col-md-6 col-12">
						<div class="card bg-warning-gradient text-white">
							<div class="card-body">
								<div class="row">
									<div class="col-6">
										<div class="icon1 mt-2 text-center">
											<i class="fe fe-pie-chart tx-40"></i>
										</div>
									</div>
									<div class="col-6">
										<div class="mt-0 text-center">
											<span class="text-white">Nurse</span>
											<h2 class="text-white mb-0">876</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		<!-- main-content closed -->


					<!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0"><span><i class="fas fa-users side-menu__icon"></i></span><span>Departments</span></h4>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Text</p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>
												<th class="border-bottom-0">Department</th>
												<th class="border-bottom-0">Manager</th>
												<th class="border-bottom-0">Employee Count</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Neurology</td>
												<td>Manager</td>
												<td>11</td>
												<td>
                                                <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-toggle="dropdown" id="dropdownMenuButton" type="button">Actions <i class="fas fa-caret-down ml-1"></i></button>
                                                    <div  class="dropdown-menu tx-13">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">View Employees</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
												</td>
											</tr>
											<tr>
												<td>Cardiology</td>
												<td>Manager</td>
												<td>5</td>
												<td>
                                                <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-toggle="dropdown" id="dropdownMenuButton" type="button">Actions <i class="fas fa-caret-down ml-1"></i></button>
                                                    <div  class="dropdown-menu tx-13">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">View Employees</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
												</td>
											</tr>
											<tr>
												<td>Nephrology</td>
												<td>Manager</td>
												<td>9</td>
												<td>
                                                <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-toggle="dropdown" id="dropdownMenuButton" type="button">Actions <i class="fas fa-caret-down ml-1"></i></button>
                                                    <div  class="dropdown-menu tx-13">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">View Employees</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
												</td>
											</tr>
											<tr>
												<td>Oncology</td>
												<td>Manager</td>
												<td>8</td>
												<td>
                                                <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-toggle="dropdown" id="dropdownMenuButton" type="button">Actions <i class="fas fa-caret-down ml-1"></i></button>
                                                    <div  class="dropdown-menu tx-13">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">View Employees</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
												</td>
											</tr>
											<tr>
												<td>Urology</td>
												<td>Manager</td>
												<td>6</td>
												<td>
                                                <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-toggle="dropdown" id="dropdownMenuButton" type="button">Actions <i class="fas fa-caret-down ml-1"></i></button>
                                                    <div  class="dropdown-menu tx-13">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">View Employees</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
												</td>
											</tr>


										</tbody>
									</table>
								</div>
							</div>
							<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
								<button class="btn btn-info btn-block Dep-btn">Add Department</button>
							</div>
						</div>
						
					</div>
					<!--/div-->

@endsection
@section('js')
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Jquery.mCustomScrollbar js-->
<script src="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!--Internal  Clipboard js-->
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Internal Prism js-->
<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
<!-- Internal Table js-->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection