@extends('layouts.admin')

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="page-titles">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item ps-0"><a href="#">Add Beneficiary</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bg-white rounded-3">
                    <div class="row">
                        <h2 class="text-primary"><strong>Create A Beneficiary</strong> <span><img src="{{asset('assets/images/beneficiary/beneficiary.png')}}" style="width: 30px; height:30px" alt=""></span></h2>
                        <!-- Card List Start  -->
                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/education.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Education</h3>
                                    <p class="card-text">Supporting education programs for all ages.</p>
                                    <a href="" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target=".bd-example-modal-lg"> Add</a>
                                </div>
                            </div>
                        </div>
                        <!--Education modal start-->
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary">Add Education Beneficiary</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Beneficiary Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Institution Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="institution_name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Type of Institution<span class="text-danger">*</span></label>
                                                <select id="inputState" class="default-select form-control wide">
                                                    <option selected>Select Institution Type</option>
                                                    <option>Primary School</option>
                                                    <option>Secondary School</option>
                                                    <option>Tertiary</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Level of Education<span class="text-danger">*</span></label>
                                                <select id="inputState" class="default-select form-control wide">
                                                    <option selected>Select Level of Education</option>
                                                    <option>Elementary</option>
                                                    <option>High School</option>
                                                    <option>Undergraduate</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Location <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Number Of Benefitting Students <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Educational Needs<span class="text-danger">*</span></label>
                                                <select id="inputState" class="default-select form-control wide">
                                                    <option selected>Select educational needs</option>
                                                    <option>Books</option>
                                                    <option>Schorlarships</option>
                                                    <option>Infrastructure</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Contact Person <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name" placeholder="Enter Contact Person Name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Contact Email <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name" placeholder="Enter contact person email">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Contact Person Phone <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name" placeholder="Enter contact person phone number">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="beneficiary_name">Description of support required <span class="text-info" style="font-size: 10px">optional</span></label>
                                                <textarea type="text-area" class="form-control" id="education_description"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---Education modal end-->

                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/healthcare.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Healthcare</h3>
                                    <p class="card-text">Improving health and wellness access.</p>
                                    <a href="" class="btn btn-outline-primary"> Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/animalcare.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Animal Care</h3>
                                    <p class="card-text">Protecting animal rights and welfare.</p>
                                    <a href="" class="btn btn-outline-primary"> Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/socialwelfare.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Social Welfare</h3>
                                    <p class="card-text">Enhancing social welfare and support systems.</p>
                                    <a href="" class="btn btn-outline-primary"> Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/emergency.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Emergency Relief</h3>
                                    <p class="card-text">Providing assistance during emergencies.</p>
                                    <a href="" class="btn btn-outline-primary"> Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/environmental.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Environmental Protection</h3>
                                    <p class="card-text">Conserving and protecting the environment.</p>
                                    <a href="" class="btn btn-outline-primary"> Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/community.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Community Development</h3>
                                    <p class="card-text">Fostering growth and development in communities.</p>
                                    <a href="" class="btn btn-outline-primary"> Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/disability.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Persons with Disability</h3>
                                    <p class="card-text">Supporting individuals with disabilities.</p>
                                    <a href="" class="btn btn-outline-primary"> Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/singlepatient.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Single Patient Support</h3>
                                    <p class="card-text">Assisting patients in need of medical support.</p>
                                    <a href="" class="btn btn-outline-primary"> Add</a>
                                </div>
                            </div>
                        </div>
                        <!----Card List End--->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
                Content body end
            ***********************************-->
@endsection
