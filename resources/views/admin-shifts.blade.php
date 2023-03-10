@extends('layouts.admin-master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Admin</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Shifts</span>
						</div>
					</div>
				</div>
				<!-- <div class="my--container"> -->
				<div class="col-xl-12">
					<div class="card mg-b-20">
						<div class="card-header pb-0">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mg-b-0"><span><i class="fas fa-users side-menu__icon"></i><span>Hospital Staff</span></h4>
							</div>
							<p class="tx-12 tx-gray-500 mb-2">Employees</p>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="example" class="table key-buttons text-md-nowrap">
									<thead>
										<tr>
											<th class="border-bottom-0">ID</th>
											<th class="border-bottom-0">Name</th>
											<th class="border-bottom-0">Shift Start</th>
											<th class="border-bottom-0">Shift End</th>
											<th class="border-bottom-0">Shift days</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Tiger Nixon</td>
											<td>9 AM</td>
											<td>6 PM</td>
											<td>
											<div class="col-sm-6 col-md-3">
												<div class="dropdown dropright">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info"
													data-toggle="dropdown" id="droprightMenuButton" type="button">Shifts<i class="fas fa-caret-right ml-1"></i></button>
													<div aria-labelledby="droprightMenuButton" class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Day 1</a>
														<a class="dropdown-item" href="#">Day 2</a>
														<a class="dropdown-item" href="#">Day 3</a>
													</div>
												</div>
											</div>
											</td>
											<td>
												<div class="col-sm-6 col-md-3 mg-t-10">
													<button class="btn btn-primary btn-block Edit-btn">Edit</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Garrett Winters</td>
											<td>9 AM</td>
											<td>6 PM</td>
											<td>
											<div class="col-sm-6 col-md-3">
												<div class="dropdown dropright">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info"
													data-toggle="dropdown" id="droprightMenuButton" type="button">Shifts<i class="fas fa-caret-right ml-1"></i></button>
													<div aria-labelledby="droprightMenuButton" class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Day 1</a>
														<a class="dropdown-item" href="#">Day 2</a>
														<a class="dropdown-item" href="#">Day 3</a>
													</div>
												</div>
											</div>
											</td>
											<td>
												<div class="col-sm-6 col-md-3 mg-t-10">
													<button class="btn btn-primary btn-block Edit-btn">Edit</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Bradley Greer</td>
											<td>9 AM</td>
											<td>6 PM</td>
											<td>
											<div class="col-sm-6 col-md-3">
												<div class="dropdown dropright">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info"
													data-toggle="dropdown" id="droprightMenuButton" type="button">Shifts<i class="fas fa-caret-right ml-1"></i></button>
													<div aria-labelledby="droprightMenuButton" class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Day 1</a>
														<a class="dropdown-item" href="#">Day 2</a>
														<a class="dropdown-item" href="#">Day 3</a>
													</div>
												</div>
											</div>
											</td>
											<td>
												<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-primary btn-block Edit-btn">Edit</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Dai Rios</td>
											<td>9 AM</td>
											<td>6 PM</td>
											<td>
											<div class="col-sm-6 col-md-3">
												<div class="dropdown dropright">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info"
													data-toggle="dropdown" id="droprightMenuButton" type="button">Shifts<i class="fas fa-caret-right ml-1"></i></button>
													<div aria-labelledby="droprightMenuButton" class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Day 1</a>
														<a class="dropdown-item" href="#">Day 2</a>
														<a class="dropdown-item" href="#">Day 3</a>
													</div>
												</div>
											</div>
											</td>
											<td>
												<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-primary btn-block Edit-btn">Edit</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>Jenette Caldwell</td>
											<td>9 AM</td>
											<td>6 PM</td>
											<td>
											<div class="col-sm-6 col-md-3">
												<div class="dropdown dropright">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info"
													data-toggle="dropdown" id="droprightMenuButton" type="button">Shifts<i class="fas fa-caret-right ml-1"></i></button>
													<div aria-labelledby="droprightMenuButton" class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Day 1</a>
														<a class="dropdown-item" href="#">Day 2</a>
														<a class="dropdown-item" href="#">Day 3</a>
													</div>
												</div>
											</div>
											</td>
											<td>
												<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-primary btn-block Edit-btn">Edit</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>6</td>
											<td>Jennifer Chang</td>
											<td>9 AM</td>
											<td>6 PM</td>
											<td>
											<div class="col-sm-6 col-md-3">
												<div class="dropdown dropright">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info"
													data-toggle="dropdown" id="droprightMenuButton" type="button">Shifts<i class="fas fa-caret-right ml-1"></i></button>
													<div aria-labelledby="droprightMenuButton" class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Day 1</a>
														<a class="dropdown-item" href="#">Day 2</a>
														<a class="dropdown-item" href="#">Day 3</a>
													</div>
												</div>
											</div>
											</td>
											<td>
												<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-primary btn-block Edit-btn">Edit</button>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
							<button class="btn btn-info btn-block Emp-btn"></button>
						</div>
					</div>	
				</div>
				<!-- </div> -->
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">

				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Table-->
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