@extends('layouts.user')

@section('user_content')
<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="page-titles">
				<ol class="breadcrumb">
					<li>
						<h5 class="bc-title">Dashboard</h5>
					</li>
				</ol>
				<a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button"
					aria-controls="offcanvasExample1">+ Add Task</a>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 wid-100">
						<div class="row">
							<div class="col-xl-3 col-sm-6">
								<div class="card chart-grd same-card">
									<div class="card-body depostit-card p-0">
										<div class="depostit-card-media d-flex justify-content-between pb-0">
											<div>
												<h6>Total Funding Received</h6>
												<h3>GH₵12,000.00</h3>
											</div>
											<div class="icon-box bg-primary-light">
												<svg width="12" height="20" viewBox="0 0 12 20" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z"
														fill="var(--primary)" />
												</svg>
											</div>
										</div>
										<div id="NewCustomers"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card chart-grd same-card">
									<div class="card-body depostit-card p-0">
										<div class="depostit-card-media d-flex justify-content-between pb-0">
											<div>
												<h6 class="mb-3">Average Funding</h6>
												<h3>GH₵2,000.00</h3>
											</div>
											<div class="icon-box bg-primary-light">
												<svg width="12" height="20" viewBox="0 0 12 20" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z"
														fill="var(--primary)" />
												</svg>
											</div>
										</div>
										<div id="NewCustomers"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card chart-grd same-card">
									<div class="card-body depostit-card p-0">
										<div class="depostit-card-media d-flex justify-content-between pb-0">
											<div>
												<h6 class="mb-3">Total Active Campaigns</h6>
												<h3>15</h3>
											</div>
											<div class="icon-box bg-secondary-light">
												<h2>👥</h2>
											</div>
										</div>
										<div id="NewCustomers"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 same-card">
								<div class="card">
									<div class="card-body depostit-card">
										<div class="depostit-card-media d-flex justify-content-between style-1">
											<div>
												<h6>Total Funds Disbursed</h6>
												<h3>GH₵ 2,000.00</h3>
											</div>
											<div class="icon-box bg-success-light">
												<h2>💰</h2>
											</div>
										</div>
										<div class="progress-box mt-0">
											<div class="d-flex justify-content-between">
												<p class="mb-0">Funds Left</p>
												<p class="mb-0">GH₵ 10,000</p>
											</div>
											<div class="progress">
												<div class="progress-bar bg-success"
													style="width:50%; height:5px; border-radius:4px;"
													role="progressbar"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card overflow-hidden">
									<div class="card-header border-0 pb-0 flex-wrap">
										<h2 class="heading mb-0">Fundings over time</h2>
										<ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link active" data-series="week" id="pills-week-tab"
													data-bs-toggle="pill" data-bs-target="#pills-week" type="button"
													role="tab" aria-selected="true">This Week</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" data-series="month" id="pills-month-tab"
													data-bs-toggle="pill" data-bs-target="#pills-month" type="button"
													role="tab" aria-selected="false">This Month</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" data-series="year" id="pills-year-tab"
													data-bs-toggle="pill" data-bs-target="#pills-year" type="button"
													role="tab" aria-selected="false">This Year</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" data-series="all" id="pills-all-tab"
													data-bs-toggle="pill" data-bs-target="#pills-all" type="button"
													role="tab" aria-selected="false">All Time</button>
											</li>
										</ul>
									</div>
									<div class="card-body  p-0">
										<div id="userDonationsChart"></div>
										<div class="ttl-project">
											<div class="pr-data">
												<h5>GH₵12,721</h5>
												<span>All Time</span>
											</div>
											<div class="pr-data">
												<h5 class="text-primary">GH₵1,200</h5>
												<span>Total Donations (value)</span>
											</div>
											<div class="pr-data">
												<h5 class="text-danger">3</h5>
												<span>Active Campaigns</span>
											</div>
											<div class="pr-data">
												<h5 class="text-success">721</h5>
												<span>Total Donations (count)</span>
											</div>
										</div>
									</div>

								</div>
							</div>
							{{-- <div class="col-xl-4 col-md-6 up-shd">
								<div class="card">
									<div class="card-header pb-0 border-0">
										<h4 class="heading mb-0">Platform Revenue</h4>
										<select class="default-select status-select normal-select">
											<option value="Today">This Week</option>
											<option value="Week">This Month</option>
											<option value="Month">This Year</option>
										</select>
									</div>
									<div class="card-body">
										<div id="projectChart" class="project-chart"></div>
										<div class="project-date">
											<div class="project-media">
												<p class="mb-0">
													<svg class="me-2" width="12" height="13" viewBox="0 0 12 13"
														fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect y="0.5" width="12" height="12" rx="3"
															fill="var(--primary)" />
													</svg>
													This Week
												</p>
												<span>GH₵1,000</span>
											</div>
											<div class="project-media">
												<p class="mb-0">
													<svg class="me-2" width="12" height="13" viewBox="0 0 12 13"
														fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect y="0.5" width="12" height="12" rx="3" fill="#3AC977" />
													</svg>
													This Month
												</p>
												<span>GH₵12,000</span>
											</div>
											<div class="project-media">
												<p class="mb-0">
													<svg class="me-2" width="12" height="13" viewBox="0 0 12 13"
														fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect y="0.5" width="12" height="12" rx="3" fill="#FF5E5E" />
													</svg>
													This Year
												</p>
												<span>GH₵123,000</span>
											</div>
											<div class="project-media">
												<p class="mb-0">
													<svg class="me-2" width="12" height="13" viewBox="0 0 12 13"
														fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect y="0.5" width="12" height="12" rx="3" fill="#FF9F00" />
													</svg>
													All Time
												</p>
												<span>GH₵132,000</span>
											</div>
										</div>
									</div>
								</div>
							</div> --}}
						</div>
					</div>
					<div class="col-xl-9 bst-seller">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
									<div class="tbl-caption">
										<h4 class="heading mb-0">Transactions</h4>
									</div>
									<table id="empoloyees-tbl" class="table">
										<thead>
											<tr>
												<th>
													<div class="form-check custom-checkbox ms-0">
														<input type="checkbox" class="form-check-input checkAllInput"
															id="checkAll2" required="">
														<label class="form-check-label" for="checkAll2"></label>
													</div>
												</th>
												<th>No.</th>
												<th>Donor Name</th>
												<th>Date</th>
												<th>Cause/Campaign</th>
												<th>Location</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox0100" required="">
														<label class="form-check-label"
															for="customCheckBox0100"></label>
													</div>
												</td>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">22/05/2025</a>
												</td>
												<td>
													<span>Healthcare</span>
												</td>
												<td>
													<span>Accra, Ghana</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
										</tbody>

									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 up-shd">
						<div class="card">
							<div class="card-header border-0 pb-1">
								<h4 class="heading mb-0">Upcoming Schedules</h4>
							</div>
							<div class="card-body schedules-cal p-2">
								<input type="text" class="form-control d-none" id="datetimepicker1">
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