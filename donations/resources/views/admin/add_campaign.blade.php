@extends('layouts.admin')

@section('content')

<div class="content-body">
    <div class="page-titles">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ps-0"><a href="#">Add Campaigns</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <h2 class="text-primary"><strong>Campaigns</strong></h2>
            <div class="col-xl-12 bg-white rounded-3">
                <div class="row">
                    <!-- Card List Start  -->
                    <div class=" col-12 col-md-4 mx-auto mb-4 text-center mt-4">
                        <div class="card shadow-lg p-3">
                            <div class="card-body">
                                <h3 class="card-title">Create A New Campaign</h3>
                                <img src="{{asset('assets/images/campaign_add.jpg')}}" style="width:150px; height:150px" alt="">
                                <br>
                                <a href="" class="btn btn-outline-dark mt-2 rounded" data-bs-toggle="modal"
                                    data-bs-target="#newCampaignModal">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-4 mx-auto mb-4 text-center mt-4">
                        <div class="card shadow-lg p-3">
                            <div class="card-body">
                                <h3 class="card-title">View Campaign Analytics</h3>
                                <img src="{{asset('assets/images/analysis.png')}}" style="width:150px; height:150px" alt="">
                                <br>
                                <a href="" class="btn btn-outline-dark mt-3 rounded"> <i class="fas fa-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Add Beneficiary modal start-->
                    <div class="modal fade bd-example-modal-lg" id="newCampaignModal" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-primary">Create a new campaign</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="beneficiary_name">Campaign Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="beneficiary_name" placeholder="Enter Campaign Name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Campaign Type <span
                                                    class="text-danger">*</span></label>
                                            <select id="healthcare_condition" class="form-select wide">
                                                <option selected>Select Campaign Type</option>
                                                <option>Education</option>
                                                <option>Healthcare</option>
                                                <option>Animalcare</option>
                                                <option>Social Welfare</option>
                                                <option>Emergency Relief</option>
                                                <option>Environmental Protection</option>
                                                <option>Community Development</option>
                                                <option>Persons with Disability</option>
                                                <option>Single Patient Support</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="beneficiary_name">Fundraising Goal <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text">GH₵</span>
                                                <input type="number" class="form-control" id="beneficiary_name" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="beneficiary_name">Start Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="start_date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">End Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="end_date">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="formFile">Upload Campaign Image <span class="text-danger"><small>* file should not be more than 4MB</small></span></label>
                                            <input type="file" class="form-control" name="" id="formFile" accept=".png, .jpg, .jpeg">
                                            
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="beneficiary_name">Contact Email <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="beneficiary_name"
                                                placeholder="Enter contact person email">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="beneficiary_name">Contact Person Phone <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="beneficiary_name"
                                                placeholder="Enter contact person phone number">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="beneficiary_name">Description <span
                                                    class="text-info" style="font-size: 10px">optional</span></label>
                                            <textarea type="text-area" class="form-control" id="education_description"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary">Add Campaign</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---Add Beneficiary end-->
                  
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
</style>

@endsection