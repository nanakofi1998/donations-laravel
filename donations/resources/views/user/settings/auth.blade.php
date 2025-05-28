@extends('layouts.user')

@section('user_content')
<div class="content-body">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Settings</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-12 col-12">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="card-header bg-white py-4 border-bottom">
                        <h4 class="mb-0 fw-bold">Auth Settings</h4>
                    </div>

                    <div class="card-body">
                        <ul class="nav nav-pills mb-4 gap-2 flex-wrap" id="settings-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active rounded-pill px-4 py-2" id="profile-tab" data-bs-toggle="pill" data-bs-target="#profile-settings" type="button">
                                    <i class="bi bi-person-circle me-2"></i> Profile Settings 
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill px-4 py-2" id="notification-tab" data-bs-toggle="pill" data-bs-target="#notifications" type="button">
                                    <i class="bi bi-bell me-2"></i> Notifications
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill px-4 py-2" id="privacy-tab" data-bs-toggle="pill" data-bs-target="#privacy-settings" type="button">
                                    <i class="bi bi-megaphone me-2"></i> Campaign Creation Request
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="settings-tabs-content">
                            <div class="tab-pane fade show active" id="profile-settings">
                                <div class="p-4">
                                    <h5 class="mb-3">Profile Settings</h5>
                                    <p class="text-muted">Update your personal details and contact information.</p>
                                    <form method="POST" action="">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <label for="first_name" class="form-label">First Name</label>
                                                <input type="text" readonly class="form-control" id="first_name" name="first_name" value="" placeholder="First Name">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="last_name" class="form-label">Last Name</label>
                                                <input type="text" readonly class="form-control" id="last_name" name="last_name" value="" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" readonly class="form-control" id="email" name="email" value=""  placeholder="Email">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phone" class="form-label">Phone Number</label>
                                                <input type="text" class="form-control" id="phone" name="phone" value="" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <label for="password" class="form-label">New Password</label>
                                                <input type="password" class="form-control" id="password" name="password" autocomplete="new-password"   placeholder="New Password">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <button type="submit" class="btn rounded-pill px-4 py-2" style="background-color: #dc3545; color: #fff;">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="notifications">
                                <div class="p-4">
                                    <h5 class="mb-3">Notification Settings</h5>
                                    <p class="text-muted">Manage how you receive updates and alerts from the platform.</p>
                                    <form method="POST" action="">
                                            @csrf
                                            <div class="form-check form-switch mb-4">
                                                <input class="form-check-input" type="checkbox" id="email_notifications" name="email_notifications" style="background-color: #000000; border-color: #ffffff;">
                                                <label class="form-check-label ms-2" for="email_notifications">Receive Email Notifications</label>
                                            </div>
                                            <div class="form-check form-switch mb-4">
                                                <input class="form-check-input" type="checkbox" id="disbursement_notifications" name="disbursement_notifications" style="background-color: #000000; border-color: #ffffff;">
                                                <label class="form-check-label ms-2" for="disbursement_notifications">Receive Disbursement Notifications</label>
                                            </div>
                                            <div class="form-check form-switch mb-4">
                                                <input class="form-check-input" type="checkbox" id="funding_notifications" name="funding_notifications" style="background-color: #000000; border-color: #ffffff;">
                                                <label class="form-check-label ms-2" for="funding_notifications">Receive Funding Notifications</label>
                                            </div>
                                            <button type="submit" class="btn rounded-pill px-4 py-2" style="background-color: #dc3545; color: #fff;">Save Notification Settings</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="privacy-settings">
                                <div class="p-4">
                                    <h5 class="mb-3">Campaign Request Settings</h5>
                                    <div class="alert alert-info mb-4" role="alert">
                                        <i class="bi bi-info-circle me-2"></i>
                                        Requests are validated after 3-business days.
                                    </div>
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="request_number" class="form-label">Request Number</label>
                                                <input type="number" class="form-control" id="request_number" name="request_number" placeholder="Enter your request number">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Upload ID Card <small class="text-danger">(Front) *</small></label>
                                                <input type="file" class="form-control" id="id_card_front" name="id_card_front" accept="image/*,application/pdf">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Upload ID Card <small class="text-danger">(Back) *</small></label>
                                                <input type="file" class="form-control" id="id_card_back" name="id_card_back" accept="image/*,application/pdf">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn rounded-pill px-4 py-2 mt-2" style="background-color: #dc3545; color: #fff;">Submit Request</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

<style>
    .nav-pills .nav-link {
        background-color: #f8f9fa;
        color: #495057;
        transition: all 0.3s ease;
    }

    .nav-pills .nav-link:hover {
        background-color: #e9ecef;
        color: #000;
    }

    .nav-pills .nav-link.active {
        background-color: #dc3545;
        color: #fff;
        box-shadow: 0 4px 10px rgba(220, 53, 69, 0.3);
    }

    .card {
        border-radius: 1.25rem;
    }

    .card-header {
        border-bottom: 1px solid #e9ecef;
    }

    .tab-pane {
        min-height: 250px;
    }
</style>
@endsection
