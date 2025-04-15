@extends('layouts.admin')

@section('content')

<div class="content-body">
    <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Add a Donor</a></li> 
                <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
            </ol>
        </div>
    <div class="container">
        
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Personal Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('add_donors.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">First Name <span class="text-danger">*</span></label>
                                        <input type="text" name="f_name" class="form-control" placeholder="First Name" required>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" name="l_name" class="form-control" placeholder="Last Name" required>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" name="donor_email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Organization Name <small class="text-primary">(optional)</small></label>
                                        <input type="text" class="form-control" name="organization_name" placeholder="Organization/Company Name">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Donation Amount <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">GH₵</span>
                                            <input type="number" class="form-control" name="donor_amount" placeholder="0.00" required>
                                        </div>
                                        
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Donation Preference <span class="text-danger">*</span></label>
                                        <select id="" class="form-select wide" name="donation_preference" required>
                                            <option selected>Choose...</option>
                                            <option value="recurring">Recurring</option>
                                            <option value="one_time">One-Time</option>
                                            <option value="crowd_funding">Crowd Funding</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Campaign</label>
                                        <small class="text-danger">* Select a campaign to donate to</small>
                                        @if ($campaigns->count())
                                        <select id="campaign_id" class="form-select wide" name="campaign_id">
                                            <option selected disabled>No Campaign Selected<option>
                                            @foreach ($campaigns as $campaign)
                                                <option value="{{ $campaign->id }}">{{ $campaign->name }}</option>
                                            @endforeach 
                                        </select>
                                        @else
                                        <input type="text" disabled class="form-control text-muted" value="No Campaigns Available" />
                                        @endif
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Phone Number <small class="text-primary">(optional)</small></label>
                                        <input type="text" class="form-control" name="donor_phone" placeholder="Phone Number">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Message to Organizer <small class="text-primary">(optional)</small></label>
                                        <textarea name="donor_message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check custom-checkbox checkbox-info">
                                        <input class="form-check-input" type="checkbox" name="anonymous" id="customCheck1" value="1">
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