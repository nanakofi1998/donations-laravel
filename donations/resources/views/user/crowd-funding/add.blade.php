@extends('layouts.user')

@section('user_content')

<div class="content-body">
        <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Add a crowd-funding</a></li> 
                    <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
                </ol>
            </div>
        <div class="container">
            
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <h3 class="card-title">Add a crowd-funding</h3>
                            <span class="text-muted ">
                                <i class="fas fa-info-circle text-warning"></i>
                                <small class="text-warning">You are limited to create only 3 campaigns monthly, a request should be made if more campaigns creation is needed</small>
                            </span>
                            <hr class="my-4">
                            <div class="basic-form">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    {{-- CSRF Token --}}
                                    @csrf
                                    <div style="display: none;">
                                        Session success: {{ session('success') ?? 'No success message' }}
                                        Session error: {{ session('error') ?? 'No error message' }}
                                    </div>
                                    <div id="individualFields">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Funding Name <span class="text-danger">*</span></label>
                                                <input type="text" name="funding_name" class="form-control" placeholder="First Name">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Funding Purpose <span class="text-danger">*</span></label>
                                               <select class="form-select wide" name="campaign_type" >
                                                <option disabled selected>Select Funding Purpose</option>
                                                <option value="education">Education</option>
                                                <option value="healthcare">Healthcare</option>
                                                <option value="shelter">Shelter/Rent</option>
                                                <option value="political-campaign">Political Campaign</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label>Target <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text">GH₵</span>
                                                <input type="number" class="form-control" name="funding_goal" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="formFile">Upload Campaign Image <span class="text-danger"><small>* max 3 images (not more than 4MB each)</small></span></label>
                                            <input type="file" class="form-control" name="funding_image[]" id="formFile" accept=".png, .jpg, .jpeg" multiple>
                                            <small class="text-muted">Hold down Ctrl (or Cmd on Mac) to select multiple images</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="beneficiary_name">Start Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="start_date" name="start_date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">End Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="end_date" name="end_date">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-12 ">
                                            <label class="form-label">Description</label>
                                            <textarea name="funding_description" class="form-control" id="summernote"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-danger">Add Funding</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection