@extends('layouts.admin')

@section('content')

<div class="content-body">
    <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Add a Donor</a></li> 
                <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
            </ol>
        </div>
    <div class="container-fluid">
        
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Personal Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="Last Name">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Organization Name <small class="text-primary">(optional)</small></label>
                                        <input type="text" class="form-control" placeholder="Organization/Company Name">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Donation Amount <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" placeholder="GH₵0.00">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Donation Preference <span class="text-danger">*</span></label>
                                        <select id="inputState" class="default-select form-control wide">
                                            <option selected>Choose...</option>
                                            <option>Recurring</option>
                                            <option>One-Time</option>
                                            <option>Crowd Funding</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Campaign <small class="text-primary">(optional)</small></label>
                                        <select id="inputState" class="default-select form-control wide">
                                            <option selected>Choose...</option>
                                            <option>Education</option>
                                            <option>War in Ukraine</option>
                                            <option>Palestine</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Phone Number <small class="text-primary">(optional)</small></label>
                                        <select id="inputState" class="default-select form-control wide">
                                            <option selected>Choose...</option>
                                            <option>Recurring</option>
                                            <option>One-Time</option>
                                            <option>Crowd Funding</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Message to Organizer <small class="text-primary">(optional)</small></label>
                                        <textarea name="message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check custom-checkbox checkbox-info">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            Donate Anonymously <small><span class="text-danger" style="font-size: 8px">* Only select if you do not want to be known for your donation(s)</span></small>
                                        </label>
                                    </div>
                                    <div class="form-check custom-checkbox checkbox-success">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            I confirm this donation is voluntary <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-success">Add Donor</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection