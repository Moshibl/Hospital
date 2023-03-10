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
							<h4 class="content-title mb-0 my-auto">Admin</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Staff</span>
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
											<span class="text-white">Managers</span>
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
												<th class="border-bottom-0">Role</th>
												<th class="border-bottom-0">Department</th>
												<th class="border-bottom-0">Age</th>
												<th class="border-bottom-0">Start date</th>
												<th  class="border-bottom-0">Actions</th>
												<th class="border-bottom-0">Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Tiger Nixon</td>
												<td>Manager</td>
												<td>Neurology</td>
												<td>61</td>
												<td>2011/04/25</td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10">
														<button class="btn btn-primary btn-block Edit-btn">Edit</button>
													</div>
												</td>
												<td>$320,800</td>
												
											</tr>
											<tr>
												<td>2</td>
												<td>Garrett Winters</td>
												<td>Doctor</td>
												<td>Neurology</td>
												<td>63</td>
												<td>2011/07/25</td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10">
														<button class="btn btn-primary btn-block Edit-btn">Edit</button>
													</div>
												</td>
												<td>$170,750</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Bradley Greer</td>
												<td>Doctor</td>
												<td>Neurology</td>
												<td>41</td>
												<td>2012/10/13</td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10">
													<button class="btn btn-primary btn-block Edit-btn">Edit</button>
													</div>
												</td>
												<td>$132,000</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Dai Rios</td>
												<td>Resident</td>
												<td>Neurology</td>
												<td>35</td>
												<td>2012/09/26</td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10">
													<button class="btn btn-primary btn-block Edit-btn">Edit</button>
													</div>
												</td>
												<td>$217,500</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Jenette Caldwell</td>
												<td>Resident</td>
												<td>Neurology</td>
												<td>30</td>
												<td>2011/09/03</td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10">
													<button class="btn btn-primary btn-block Edit-btn">Edit</button>
													</div>
												</td>
												<td>$345,000</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Jennifer Chang</td>
												<td>Nurse</td>
												<td>Neurology</td>
												<td>28</td>
												<td>2010/11/14</td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10">
													<button class="btn btn-primary btn-block Edit-btn">Edit</button>
													</div>
												</td>
												<td>$357,650</td>
											</tr>
											<tr>
												<td>7</td>
												<td>Brenden Wagner</td>
												<td>Nurse</td>
												<td>Neurology</td>
												<td>28</td>
												<td>2011/06/07</td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10">
													<button class="btn btn-primary btn-block Edit-btn">Edit</button>
													</div>
												</td>
												<td>$206,850</td>
											</tr>
											<tr>
												<td>8</td>
												<td>Yuri Berry</td>
												<td>Manager</td>
												<td>Cardiology</td>
												<td>40</td>
												<td>2009/06/25</td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10">
													<button class="btn btn-primary btn-block Edit-btn">Edit</button>
													</div>
												</td>
												<td>$675,000</td>
											</tr>
											<tr>
												<td>9</td>
												<td>Caesar Vance</td>
												<td>Doctor</td>
												<td>Cardiology</td>
												<td>21</td>
												<td>2011/12/12</td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10">
													<button class="btn btn-primary btn-block Edit-btn">Edit</button>
													</div>
												</td>
												<td>$106,450</td>
											</tr>
											<tr>
												<td>10</td>
												<td>Doris Wilder</td>
												<td>Doctor</td>
												<td>Cardiology</td>
												<td>23</td>
												<td>2010/09/20</td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10">
													<button class="btn btn-primary btn-block Edit-btn">Edit</button>
													</div>
												</td>
												<td>$85,600</td>
											</tr>
											<tr>
												<td>11</td>
												<td>Angelica Ramos</td>
												<td>Resident</td>
												<td>Cardiology</td>
												<td>47</td>
												<td>2009/10/09</td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10">
													<button class="btn btn-primary btn-block Edit-btn">Edit</button>
													</div>
												</td>
												<td>$1,200,000</td>
											</tr>
											<tr>
												<td>12</td>
												<td>Gavin Joyce</td>
												<td>Resident</td>
												<td>Cardiology</td>
												<td>42</td>
												<td>2010/12/22</td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10">
													<button class="btn btn-primary btn-block Edit-btn">Edit</button>
													</div>
												</td>
												<td>$92,575</td>
											</tr>
											<tr>
												<td>13</td>
												<td>Fiona Green</td>
												<td>Nurse</td>
												<td>Cardiology</td>
												<td>48</td>
												<td>2010/03/11</td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10">
													<button class="btn btn-primary btn-block Edit-btn">Edit</button>
													</div>
												</td>
												<td>$850,000</td>
											</tr>
											<tr>
												<td>14</td>
												<td>Michelle House</td>
												<td>Nurse</td>
												<td>Cardiology</td>
												<td>37</td>
												<td>2011/06/02</td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10">
													<button class="btn btn-primary btn-block Edit-btn">Edit</button>
													</div>
												</td>
												<td>$95,400</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
								<button class="btn btn-info btn-block Emp-btn">Add Employee</button>
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