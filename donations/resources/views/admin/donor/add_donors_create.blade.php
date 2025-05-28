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
                    <div class="card shadow-lg rounded">
                        <div class="card-body">
                            <h5 class="mb-3">
                                Donor Type <span class="text-danger">*</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('add_donors.store')}}" method="POST" enctype="multipart/form-data">
                                    {{-- CSRF Token --}}
                                    @csrf
                                    <div style="display: none;">
                                        Session success: {{ session('success') ?? 'No success message' }}
                                        Session error: {{ session('error') ?? 'No error message' }}
                                    </div>
                                    {{-- Individuals only inputs --}}
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="donor_type" id="individualRadio" value="individual" checked>
                                        <label for="individualRadio" class="form-check-label"> Individual</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="donor_type" id="institutionRadio" value="institution">
                                        <label for="institutionRadio" class="form-check-label"> Institution</label>
                                    </div>
                                    <div id="individualFields">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">First Name <span class="text-danger">*</span></label>
                                                <input type="text" name="f_name" class="form-control" placeholder="First Name">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                                <input type="text" name="l_name" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Institutions only inputs --}}
                                    <div id="institutionFields" style="display: none;">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Institution Name <span class="text-danger">*</span></label>
                                                <input type="text" name="institution_name" class="form-control" placeholder="Enter Institution Name">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Institution Address <span class="text-danger">*</span></label>
                                                <input type="text" name="institution_address" class="form-control" placeholder="Enter Institution Address">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Donor Lead Source <span class="text-danger">*</span></label>
                                            <select name="donor_source" id="" class="form-select wide" required>
                                                <option selected disabled>Choose Donor Source</option>
                                                <option value="seminar">Seminar</option>
                                                <option value="socials">Social Media (LinkedIn, Facebook, Instagram, Twitter, Whatsapp etc.)</option>
                                                <option value="forum">Forum</option>
                                                <option value="referral">Referral</option>
                                                <option value="corporate">Corporate Partner</option>
                                                <option value="crowdfunding">Crowdfunding Platform</option>
                                                <option value="email-campaign">Email Campaign</option>
                                                <option value="event">Event Attendance</option>
                                                <option value="outreach">Community Outreach</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div> 
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Donor Lead Type <span class="text-danger">*</span></label>
                                            <select name="donor_lead_type" id="" class="form-select wide" required>
                                                <option selected disabled>Choose Donor-Lead Type</option>
                                                <option value="major-donor-prospect">Major Donor Prospect</option>
                                                <option value="corporate-partner">Corporate Partner</option>
                                                <option value="corporate-donor">Corporate Donor</option>
                                                <option value="influencer">Influencer/Ambassador</option>
                                                <option value="board_member">Board Member Prospect</option>
                                                <option value="legacy-donor">Legacy Donor Prospect</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div> 
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Target Amount <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">GH₵</span>
                                                <input type="number" class="form-control" name="donor_amount" placeholder="0.00" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Campaign</label>
                                            <small class="text-warning">  Select a campaign to donate to (optional)</small>
                                            @if ($campaigns->count())
                                            <select id="campaign_id" class="form-select wide" name="campaign_id">
                                                <option selected disabled>No Campaign Selected<option>
                                                @foreach ($campaigns as $campaign)
                                                    <option value="{{ $campaign->id }}">{{ $campaign->campaign_name }}</option>
                                                @endforeach 
                                            </select>
                                            @else
                                            <input type="text" disabled class="form-control text-muted" value="No Campaigns Available" />
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Donation Preference <span class="text-warning">(optional)</span></label>
                                            <select id="" class="form-select wide" name="donation_preference">
                                                <option selected>Choose donation frequency</option>
                                                <option value="recurring">Recurring</option>
                                                <option value="one_time">One-Time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Donor Phone Number <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control" name="donor_phone" placeholder="Phone Number" required>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Pipeline Stage <small class="text-danger">*</small></label>
                                            <select name="pipeline_stage" class="form-select wide" id="pipeline_stage" required>
                                                <option selected disabled>Choose Pipeline Stage</option>
                                                <option value="prospecting">Prospecting</option>
                                                <option value="qualifying">Qualifying</option>
                                                <option value="contacting">Contacting</option>
                                                <option value="negotiation">Negotiation</option>
                                                <option value="closed-won">Closed Won</option>
                                                <option value="closed-lost">Closed Lost</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-12 ">
                                            <label class="form-label">Comments <small class="text-warning">(optional)</small></label>
                                            <textarea name="donor_message" class="form-control" id="summernote"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-danger">Add Donor</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('scripts')
    <script src="{{ asset('assets/js/donor_add.js') }}"></script>

    @if (session('success'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 8000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
            },
            title: "Success",
            icon: "success",
            text: "{{session('success') }}",
            iconColor: '#3085d6',
            background: '#fff',
        });
    </script>
    @endif

    @if (session('error'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 10   000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
            },
            title: "Error",
            icon: "error",
            text: "{{session('error') }}",
            iconColor: '#3085d6',
            background: '#fff',
        });
    </script>
    @endif
    @endsection