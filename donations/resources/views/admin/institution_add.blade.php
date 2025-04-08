@extends('layouts.admin')

@section('content')


<div class="content-body">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Institution - Add an Institution</a></li>
        </ol>
    </div>
    <div class="container-fluid">
        <!-- row -->
        
    <form action="" method="POST" enctype="multipart/form-data">
        <h3>Institution Details</h3>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="institution_name">Institution Name</label>
                <input type="text" id="institution_name" name="institution_name" class="form-control" placeholder="Institution Name" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="institution_phone">Phone Number</label>
                <input type="text" id="institution_phone" name="institution_phone" class="form-control" placeholder="Phone Number" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="institution_email">Email</label>
                <input type="email" id="institution_email" name="institution_email" class="form-control" placeholder="Enter Institution Email" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="license">Upload Institution License</label>
                <input type="file" id="license" name="license" class="form-control">
            </div>
            <div class="col-md-3 mb-3">
                <label for="certificate">Upload Institution Certificate</label>
                <input type="file" id="certificate" name="certificate" class="form-control">
            </div>
        </div>
        <h3>Contact Person Details</h3>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="contact_person_name">Contact Person</label>
                <input type="text" id="contact_person_name" name="contact_person_name" class="form-control" placeholder="Enter Contact Person Name" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="contact_person_email">Contact Person Email</label>
                <input type="email" id="contact_person_email" name="contact_person_email" class="form-control" placeholder="Enter Contact Person Email" required>
            </div>
            <div class="col-md-6">
                <label for="contact_person_phone">Contact Person Phone</label>
                <input type="text" id="contact_person_phone" name="contact_person_phone" class="form-control" placeholder="Enter Contact Person Phone Number" required>
            </div>
            <div class="col-md-6">
                <label for="contact_person_position">Contact Person Position</label>
                <input type="text" id="contact_person_position" name="contact_person_position" class="form-control" placeholder="Enter Contact Person Position" required>
            </div>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save All</button>
        </div>
    </form>
    </div>
</div>
    
@endsection