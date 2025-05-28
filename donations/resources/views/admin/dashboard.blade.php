@extends('layouts.admin')

@section('content')

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
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
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
												<h6>Total Donations Received</h6>
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
								<div class="card same-card">
									<div class="card-body d-flex align-items-center py-2">
										<div id="AllProject"></div>
										<ul class="project-list">
											<li>
												<h6>Total Campaigns Started</h6>
											</li>
											<li>
												<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<rect width="10" height="10" rx="3" fill="#3AC977" />
												</svg>
												Compete
											</li>
											<li>
												<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<rect width="10" height="10" rx="3" fill="var(--primary)" />
												</svg>
												Pending
											</li>
											<li>
												<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<rect width="10" height="10" rx="3" fill="var(--secondary)" />
												</svg>
												Cancelled
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card chart-grd same-card">
									<div class="card-body depostit-card p-0">
										<div class="depostit-card-media d-flex justify-content-between pb-0">
											<div>
												<h6>Total Donors</h6>
												<h3>1200</h3>
											</div>
											<div class="icon-box bg-light">
												<h2>👥</h2>
											</div>
										</div>
										<div id="NewExperience"></div>
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
							<div class="col-xl-8">
								<div class="card overflow-hidden">
									<div class="card-header border-0 pb-0 flex-wrap">
										<h2 class="heading mb-0">Donations over time</h2>
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
										<div id="overiewChart"></div>
										<div class="ttl-project">
											<div class="pr-data">
												<h5>12,721</h5>
												<span>All Time</span>
											</div>
											<div class="pr-data">
												<h5 class="text-primary">721</h5>
												<span>This week</span>
											</div>
											<div class="pr-data">
												<h5>$2,50,523</h5>
												<span>This Month</span>
											</div>
											<div class="pr-data">
												<h5 class="text-success">12,275h</h5>
												<span>This Year</span>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="col-xl-4 col-md-6 up-shd">
								<div class="card">
									<div class="card-header pb-0 border-0">
										<h4 class="heading mb-0">Donation Metrics</h4>
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
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Top Performing Campaigns 🚀</h4>
							</div>
							<div class="card-body">
								<canvas id="lineChart_3"></canvas>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-md-6 flag">
						<div class="card overflow-hidden">
							<div class="card-header border-0">
								<h4 class="heading mb-0">Top Donor Locations</h4>
							</div>
							<div class="card-body pe-0">
								<div class="row">
									<div class="col-xl-8 active-map-main">
										<div id="world-map" class="active-map"></div>
									</div>
									<div class="col-xl-4 active-country dz-scroll">
										<div class="">
											<div class="country-list">
												<img src="{{asset('assets/images/country/india.png')}}" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">India</p>
														<p class="mb-0">50%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:60%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="{{asset('assets/images/country/canada.png')}}" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">Canada</p>
														<p class="mb-0">30%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:30%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="{{asset('assets/images/country/russia.png')}}" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">Russia</p>
														<p class="mb-0">20%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:20%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="{{asset('assets/images/country/uk.png')}}" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">United Kingdom</p>
														<p class="mb-0">40%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:40%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="{{asset('assets/images/country/aus.png')}}" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">Australia</p>
														<p class="mb-0">60%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:70%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="{{asset('assets/images/country/usa.png')}}" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">United States</p>
														<p class="mb-0">20%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:80%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="{{ asset('assets/images/country/pak.png') }}" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">Pakistan</p>
														<p class="mb-0">20%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:20%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="{{ asset('assets/images/country/germany.png') }}" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">Germany</p>
														<p class="mb-0">80%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:80%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="{{ asset('assets/images/country/uae.png') }}" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">UAE</p>
														<p class="mb-0">30%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:30%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="country-list">
												<img src="{{asset('assets/images/country/china.png')}}" alt="">
												<div class="progress-box mt-0">
													<div class="d-flex justify-content-between">
														<p class="mb-0 c-name">China</p>
														<p class="mb-0">40%</p>
													</div>
													<div class="progress">
														<div class="progress-bar bg-primary"
															style="width:40%; height:5px; border-radius:4px;"
															role="progressbar"></div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 bst-seller">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
									<div class="tbl-caption">
										<h4 class="heading mb-0">Beneficiaries</h4>
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
												<th>Beneficiary Name</th>
												<th>Email Address</th>
												<th>Contact Number</th>
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
															<span>Web Designer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">ra@gmail.com</a>
												</td>
												<td>
													<span>+12 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>
												<td>
													<span>AZ</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox1100" required="">
														<label class="form-check-label"
															for="customCheckBox1100"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Web Designer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a>
												</td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox151" required="">
														<label class="form-check-label" for="customCheckBox151"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Ricky M</a></h6>
															<span>Software Designer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">rm@gmail.com</a>
												</td>
												<td>
													<span>+55 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>
												<td>
													<span>PA</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox2100" required="">
														<label class="form-check-label"
															for="customCheckBox2100"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Software Designer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a>
												</td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox3100" required="">
														<label class="form-check-label"
															for="customCheckBox3100"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Honey Risher</a></h6>
															<span>Software Designer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">hr@gmail.com</a>
												</td>
												<td>
													<span>+22 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>
												<td>
													<span>WA</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox4100" required="">
														<label class="form-check-label"
															for="customCheckBox4100"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Mony Antony</a></h6>
															<span>Web Designer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">ma@gmail.com</a>
												</td>
												<td>
													<span>+62 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>
												<td>
													<span>WA</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox2222" required="">
														<label class="form-check-label"
															for="customCheckBox2222"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Ankites Risher</a></h6>
															<span>Web Designer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">ar@gmail.com</a>
												</td>
												<td>
													<span>+62 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>
												<td>
													<span>AL</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox1111" required="">
														<label class="form-check-label"
															for="customCheckBox1111"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Elijah James</a></h6>
															<span>Software Developer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">ar@gmail.com</a>
												</td>
												<td>
													<span>+85 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>
												<td>
													<span>AL</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox1122" required="">
														<label class="form-check-label"
															for="customCheckBox1122"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Elijah James</a></h6>
															<span>Software Developer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">ej@gmail.com</a>
												</td>
												<td>
													<span>+69 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>
												<td>
													<span>AL</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox5100" required="">
														<label class="form-check-label"
															for="customCheckBox5100"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Tony Antony</a></h6>
															<span>Web Designer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">ta@gmail.com</a>
												</td>
												<td>
													<span>+78 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>
												<td>
													<span>NYC</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox0101" required="">
														<label class="form-check-label"
															for="customCheckBox0101"></label>
													</div>
												</td>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Web Designer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a>
												</td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Pending</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox102" required="">
														<label class="form-check-label" for="customCheckBox102"></label>
													</div>
												</td>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Web Designer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a>
												</td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox1055" required="">
														<label class="form-check-label"
															for="customCheckBox1055"></label>
													</div>
												</td>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Web Designer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a>
												</td>
												<td>
													<span>+255 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>
												<td>
													<span>USA</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Pending</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox103" required="">
														<label class="form-check-label" for="customCheckBox103"></label>
													</div>
												</td>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Web Designer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a>
												</td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input"
															id="customCheckBox104" required="">
														<label class="form-check-label" for="customCheckBox104"></label>
													</div>
												</td>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Web Designer</span>
														</div>
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a>
												</td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>
												<td>
													<span>USA</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Pending</span>
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
								<h4 class="heading mb-0">Upcoming Events</h4>
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
		<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
			<div class="offcanvas-header">
				<h5 class="modal-title" id="#gridSystemModal">Add Employee</h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="fa-solid fa-xmark"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<div class="container-fluid">
					<div>
						<label>Profile Picture</label>
						<div class="dz-default dlab-message upload-img mb-3">
							<form action="#" class="dropzone">
								<svg width="41" height="40" viewBox="0 0 41 40" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA"
										stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round" />
									<path
										d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667"
										stroke="#DADADA" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round" />
									<path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA"
										stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
								<div class="fallback">
									<input name="file" type="file" multiple>

								</div>
							</form>
						</div>
					</div>
					<form>
						<div class="row">
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput1" class="form-label">Employee ID <span
										class="text-danger">*</span></label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput2" class="form-label">Employee Name<span
										class="text-danger">*</span></label>
								<input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput3" class="form-label">Employee Email<span
										class="text-danger">*</span></label>
								<input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput4" class="form-label">Password<span
										class="text-danger">*</span></label>
								<input type="password" class="form-control" id="exampleFormControlInput4"
									placeholder="">
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Designation<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Please select</option>
									<option value="html">Software Engineer</option>
									<option value="css">Civil Engineer</option>
									<option value="javascript">Web Doveloper</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Department<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Please select</option>
									<option value="html">Software</option>
									<option value="css">Doit</option>
									<option value="javascript">Designing</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Country<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Please select</option>
									<option value="html">Ind</option>
									<option value="css">USA</option>
									<option value="javascript">UK</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput88" class="form-label">Mobile<span
										class="text-danger">*</span></label>
								<input type="number" class="form-control" id="exampleFormControlInput88" placeholder="">
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Gender<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Please select</option>
									<option value="html">Male</option>
									<option value="css">Female</option>
									<option value="javascript">Other</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput99" class="form-label">Joining Date<span
										class="text-danger">*</span></label>
								<input type="date" class="form-control" id="exampleFormControlInput99">
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput8" class="form-label">Date of Birth<span
										class="text-danger">*</span></label>
								<input type="date" class="form-control" id="exampleFormControlInput8">
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput10" class="form-label">Reporting To<span
										class="text-danger">*</span></label>
								<input type="text" class="form-control" id="exampleFormControlInput10" placeholder="">
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Language Select<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Please select</option>
									<option value="html">English</option>
									<option value="css">Hindi</option>
									<option value="javascript">Canada</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">User Role<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Please select</option>
									<option value="html">Parmanent</option>
									<option value="css">Parttime</option>
									<option value="javascript">Per Hours</option>
								</select>
							</div>
							<div class="col-xl-12 mb-3">
								<label class="form-label">Address<span class="text-danger">*</span></label>
								<textarea rows="3" class="form-control"></textarea>
							</div>
							<div class="col-xl-12 mb-3">
								<label class="form-label">About<span class="text-danger">*</span></label>
								<textarea rows="3" class="form-control"></textarea>
							</div>
						</div>
						<div>
							<button class="btn btn-danger light ms-1">Cancel</button>
							<button class="btn btn-primary me-1">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample1">
			<div class="offcanvas-header">
				<h5 class="modal-title" id="#gridSystemModal1">Add New Task</h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="fa-solid fa-xmark"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<div class="container-fluid">
					<form>
						<div class="row">
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInputfirst" class="form-label">Title<span
										class="text-danger">*</span></label>
								<input type="text" class="form-control" id="exampleFormControlInputfirst"
									placeholder="Title">
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Project<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Project</option>
									<option value="html">Salesmate</option>
									<option value="css">ActiveCampaign</option>
									<option value="javascript">Insightly</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInputthree" class="form-label">Start Date<span
										class="text-danger">*</span></label>
								<input type="date" class="form-control" id="exampleFormControlInputthree">
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInputfour" class="form-label">End Date<span
										class="text-danger">*</span></label>
								<input type="date" class="form-control" id="exampleFormControlInputfour">
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Estimated Hour<span class="text-danger">*</span></label>
								<div class="input-group">
									<input type="text" class="form-control" value="09:30"><span
										class="input-group-text"><i class="fas fa-clock"></i></span>
								</div>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Status<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Status</option>
									<option value="html">In Progess</option>
									<option value="css">Pending</option>
									<option value="javascript">Completed</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">priority<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">priority</option>
									<option value="html">Hight</option>
									<option value="css">Medium</option>
									<option value="javascript">Low</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Category<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Category</option>
									<option value="html">Designing</option>
									<option value="css">Development</option>
									<option value="javascript">react developer</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Permission<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Permission</option>
									<option value="html">Public</option>
									<option value="css">Private</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Deadline add<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Deadline</option>
									<option value="html">Yes</option>
									<option value="css">No</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Assigned to<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Assigned</option>
									<option value="html">Bernard</option>
									<option value="css">Sergey Brin</option>
									<option value="javascript"> Larry Ellison</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Responsible Person<span class="text-danger">*</span></label>
								<input name='tagify' class="form-control py-0 ps-0 h-auto" value='James, Harry'>

							</div>
							<div class="col-xl-12 mb-3">
								<label class="form-label">Description<span class="text-danger">*</span></label>
								<textarea rows="3" class="form-control"></textarea>
							</div>
							<div class="col-xl-12 mb-3">
								<label class="form-label">Summary<span class="text-danger">*</span></label>
								<textarea rows="3" class="form-control"></textarea>
							</div>

						</div>
						<div>
							<button class="btn btn-danger light ms-1">Cancel</button>
							<button class="btn btn-primary me-1">Help Desk</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-center">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Employee</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-xl-12">
								<label class="form-label">Email ID<span class="text-danger">*</span></label>
								<input type="email" class="form-control" placeholder="hello@gmail.com">
								<label class="form-label mt-3">Employment date<span class="text-danger">*</span></label>
								<input class="form-control" type="date">
								<div class="row">
									<div class="col-xl-6">
										<label class="form-label mt-3">First Name<span
												class="text-danger">*</span></label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="col-xl-6">
										<label class="form-label mt-3">Last Name<span
												class="text-danger">*</span></label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Surname">
										</div>
									</div>
								</div>
								<div class="mt-3 invite">
									<label class="form-label">Send invitation email<span
											class="text-danger">*</span></label>
									<input type="email" class="form-control " placeholder="+ invite">
								</div>


							</div>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
    
@endsection