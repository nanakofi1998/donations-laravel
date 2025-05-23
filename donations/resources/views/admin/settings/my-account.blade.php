@extends('layouts.admin')

@section('content')

<div class="content-body">
    <div class="page-titles">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ps-0"><a href="#">My Account</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>
            <!-- row -->
			<div class="container-fluid">
				<!-- row -->
				<div class="row">
					<div class="col-xl-3 col-lg-4">
						<div class="clearfix">
							<div class="card card-bx profile-card author-profile m-b30">
								<div class="card-body">
									<div class="p-5">
										<div class="author-profile">
											<div class="author-media">
												<img src="{{asset('assets/images/upload-image.jpg')}}" alt="">
												<div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
													<input type="file" class="update-flie">
													<i class="fa fa-camera"></i>
												</div>
											</div>
											<div class="author-info">
												<h6 class="title">User Name</h6>
												<p>test@gmail.com</p>
												<span>User Role</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-lg-8">
						<div class="card profile-card card-bx m-b30">
							<div class="card-header">
								<h6 class="title">Account setup</h6>
							</div>
							<form class="profile-form">
								<div class="card-body">
									<div class="row">
										<div class="col-sm-6 m-b30">
											<label class="form-label">First Name</label>
											<input type="text" class="form-control" value="" placeholder="First Name" readonly>
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Last Name</label>
											<input type="text" class="form-control" value="" placeholder="Last Name" readonly>
										</div>
                                        <div class="col-sm-6 m-b30">
                                            <label class="form-label">Set New Password</label>
                                            <input type="text" class="form-control" value="" placeholder="********">
                                        </div>
                                        <div class="col-sm-6 m-b30">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="text" class="form-control" value="" placeholder="********">
									</div>
								</div>
								<div class="card-footer">
									<button class="btn btn-outline-danger">Save Changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
    
@endsection