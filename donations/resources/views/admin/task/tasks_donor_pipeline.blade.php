@extends('layouts.admin')

@section('content')

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->	
			<div class="page-titles">
				<ol class="breadcrumb">
					<li><h5 class="bc-title">Task</h5></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						Home </a>
					</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Donor Pipeline</a></li>
				</ol>
			</div>
			<div class="container-fluid">
				<div class="d-flex align-items-center mb-4">
					<h2 class="mb-0 text-primary mx-3"><strong> Donor Pipeline </strong></h2>
                    <img src="{{asset('assets/images/pipeline.png')}}" style="width: 30px; height:30px;" alt="">
				</div>
				<div class="row kanban-bx">
					<div class="col-3">
						<div class="card kanbanPreview-bx">
							<div class="card-body draggable-zone dropzoneContainer">
								<div class="sub-card border-dark">
									<div class="sub-card-2">
										<div>
											<h5 class="mb-0">Donor Prospecting</h5>
											<span></span>
										</div>
										<div class="icon-box bg-dark rounded-circle">
											<h5 class="text-white totalCount">0</h5>
										</div>
									</div>
								</div>
								<div class="sub-card draggable-handle draggable p-0">
									<div class="task-card-data">
										<div class="products">
											<div>
												<h6>Mr. Boakye</h6>
												<span>Education Benefactor</span>
											</div>	
										</div>
										<div class="my-2">
											<span class="badge badge-dark light border-0 me-1">Recurring</span>
										</div>
										<div class="d-flex align-items-center">
											<p class="mb-0 font-w500 text-secondary me-2">Status</p>
											<select class="default-select status-select">
											  <option value="inactive">Inactive</option>
											  <option value="pending">Pending</option>
                                              <option value="active">Active</option>
											</select>
										</div>
											
									</div>	
									<div class="card-footer d-flex align-items-center justify-content-between">
										<div class="footer-data">
											<span>Start Date</span>
											<p>06 Feb 2023</p>
										</div>
										<div class="footer-data">
											<span>End Date</span>
											<p>06 Feb 2023</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card kanbanPreview-bx">
							<div class="card-body draggable-zone dropzoneContainer">
								<div class="sub-card border-primary">
									<div class="sub-card-2">
										<div>
											<h5 class="mb-0">Donor Cultivation</h5>
											<span>Tasks assigned to me: 18</span>
										</div>
										<div class="icon-box bg-primary-light rounded-circle">
											<h5 class="text-primary totalCount">0</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card kanbanPreview-bx">
							<div class="card-body draggable-zone dropzoneContainer">
								<div class="sub-card border-warning">
									<div class="sub-card-2">
										<div>
											<h5 class="mb-0">Donor Solicitation</h5>
											<span>Tasks assigned to me: 18</span>
										</div>
										<div class="icon-box bg-warning-light rounded-circle">
											<h5 class="text-warning totalCount">0</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card kanbanPreview-bx">
							<div class="card-body draggable-zone dropzoneContainer">
								<div class="sub-card border-success">
									<div class="sub-card-2">
										<div>
											<h5 class="mb-0">Donor Retention</h5>
											<span>Tasks assigned to me: 13</span>
										</div>
										<div class="icon-box bg-success-light rounded-circle">
											<h5 class="text-success totalCount">0</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
        </div>
		
        <!--**********************************
            Content body end
        ***********************************-->
    
@endsection