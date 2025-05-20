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
                        <h2 class="text-primary"><strong>Create A Beneficiary</strong> <span><img
                                    src="{{ asset('assets/images/beneficiary/beneficiary.png') }}"
                                    style="width: 30px; height:30px" alt=""></span></h2>
                        <!-- Card List Start  -->
                        <div class="col-md-4 mb-3 mb-sm-0 mt-2">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/education.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Education</h3>
                                    <p class="card-text">Supporting education programs for all ages.</p>
                                    <a href="" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#educationModal"> Add</a>
                                </div>
                            </div>
                        </div>

                        <!--Education modal start-->
                        <div class="modal fade bd-example-modal-lg" id="educationModal" tabindex="-1" role="dialog" name="education"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary">Add Education Beneficiary</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action=" {{ route ('add_beneficiary.store')}}" method="POST" class="row">
                                            @csrf
                                            <div style="display: none;">
                                                Session success: {{ session('success') ?? 'No success message' }}
                                                Session error: {{ session('error') ?? 'No error message' }}
                                            </div>
                                            <input type="hidden" name="beneficiary_type" value="education">
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Beneficiary Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name" name="beneficiary_name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Institution Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="school_name" name="school_name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Type of Institution<span
                                                        class="text-danger">*</span></label>
                                                <select id="school_type" class="form-select wide" name="school_type">
                                                    <option disabled selected>Select Institution Type</option>
                                                    <option value="primary">Primary School</option>
                                                    <option value="secondary">Secondary School</option>
                                                    <option value="tertiary">Tertiary</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Level of Education<span
                                                        class="text-danger">*</span></label>
                                                <select id="inputState" class="form-select wide" name="education_level">
                                                    <option selected disabled>Select Level of Education</option>
                                                    <option value="elementary">Elementary</option>
                                                    <option value="high-school">High School</option>
                                                    <option value="undergraduate">Undergraduate</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Location <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="school_location" name="school_location">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Number Of Benefitting Students <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="number_of_beneficiaries" name="number_of_beneficiaries">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Educational Needs<span
                                                        class="text-danger">*</span></label>
                                                <select id="inputState" class="form-select wide" name="education_needs">
                                                    <option selected disabled>Select educational needs</option>
                                                    <option value="books">Books</option>
                                                    <option value="schorlarships">Schorlarships</option>
                                                    <option value="infrastructure">Infrastructure</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Contact Person <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_contact_person" name="beneficiary_contact_person"
                                                    placeholder="Enter Contact Person Name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Contact Email <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_contact_email" name="beneficiary_contact_email"
                                                    placeholder="Enter contact person email">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Contact Person Phone <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_contact_number" name="beneficiary_contact_number"
                                                    placeholder="Enter contact person phone number">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="beneficiary_name">Description of support required <span
                                                        class="text-info" style="font-size: 10px">optional</span></label>
                                                <textarea type="text-area" class="form-control" id="summernote" name="beneficiary_description"></textarea>
                                            </div>
                                       
                                            </div>
                                            <div class="modal-footer">
                                                 <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                        <!---Education modal end-->

                        <div class="col-md-4 mb-3 mb-sm-0 mt-2">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/healthcare.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Healthcare</h3>
                                    <p class="card-text">Improving health and wellness access.</p>
                                    <a href="" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#healthCareModal"> Add</a>
                                </div>
                            </div>
                        </div>
                        <!--Healthcare modal start-->
                        <div class="modal fade bd-example-modal-lg" id="healthCareModal" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary">Add Healthcare Beneficiary</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action=" {{ route ('add_beneficiary.store')}}" method="POST" class="row">
                                            @csrf
                                            <div style="display: none;">
                                                Session success: {{ session('success') ?? 'No success message' }}
                                                Session error: {{ session('error') ?? 'No error message' }}
                                            </div>
                                            <input type="hidden" name="beneficiary_type" value="healthcare">
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Beneficiary Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="beneficiary_name" name="beneficiary_name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="healthcare_name">Healthcare Institution Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="healthcare_institution_name" name="healthcare_name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Type of Healthcare Support <span
                                                        class="text-danger">*</span></label>
                                                <select id="health_support" class="form-select wide" name="support_type">
                                                    <option selected disabled>Select Healthcare Support Type</option>
                                                    <option value="medical-support">Medical Support</option>
                                                    <option value="hospital-equipment">Hospital Equipment</option>
                                                    <option value="patient-care">Patient Care</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Specific Health Condition <span
                                                        class="text-danger">*</span></label>
                                                <select id="health_condition" class="form-select wide" name="specific_condition">
                                                    <option selected disabled>Specific Health Condition</option>
                                                    <option value="cancer">Cancer</option>
                                                    <option value="diabetes">Diabetes</option>
                                                    <option value="general-support">General Health Support</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_location">Location <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="healthcare_location" name="healthcare_location">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="number_of_patients">Number Of Patients <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="number_of_patients" name="number_of_patients">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Person <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="healthcare_beneficiary_name"
                                                    placeholder="Enter Contact Person Name" name="beneficiary_contact_person">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="email">Contact Email <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="healthcare_beneficiary_email"
                                                    placeholder="Enter contact person email" name="beneficiary_contact_email">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="number">Contact Person Phone <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="healthcare_beneficiary_phone"
                                                    placeholder="Enter contact person phone number" name="beneficiary_contact_number">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="description">Description of support required <span
                                                        class="text-info" style="font-size: 10px">optional</span></label>
                                                <textarea type="text-area" class="form-control" id="summernote" name="beneficiary_description"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!---Healthcare modal end-->
                        <div class="col-md-4 mb-3 mb-sm-0 mt-2">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/animalcare.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Animal Care</h3>
                                    <p class="card-text">Protecting animal rights and welfare.</p>
                                    <a href="" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#animalCareModal"> Add</a>
                                </div>
                            </div>
                        </div>
                        <!---Animal care modal start-->
                        <div class="modal fade bd-example-modal-lg" id="animalCareModal" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary">Add Animalcare Beneficiary</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="animalcare_beneficiary_name">Beneficiary Org. Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="animalcare_beneficiary_name"
                                                    placeholder="Enter organization name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Type of Animalcare <span
                                                        class="text-danger">*</span></label>
                                                <select id="animal_support" class="form-select">
                                                    <option selected>Select Animalcare Type</option>
                                                    <option>Shelter</option>
                                                    <option>Rescue</option>
                                                    <option>Wildfire Protection</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Animal Species Supported<span
                                                        class="text-danger">*</span></label>
                                                <select id="animal_species" class="form-select">
                                                    <option selected>Select animal species supported</option>
                                                    <option>Dogs</option>
                                                    <option>Cats</option>
                                                    <option>Wildlife</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Care Needs<span
                                                        class="text-danger">*</span></label>
                                                <select id="care_needs" class="form-select">
                                                    <option selected>Select care needs</option>
                                                    <option>Food</option>
                                                    <option>Medical Supplies</option>
                                                    <option>Adoption Support</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Location <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="healthcare_location">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Number Of Animals Benefitting <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="patients">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Person <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="healthcare_beneficiary_name"
                                                    placeholder="Enter Contact Person Name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Email <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="healthcare_beneficiary_email"
                                                    placeholder="Enter contact person email">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Person Phone <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="healthcare_beneficiary_phone"
                                                    placeholder="Enter contact person phone number">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="beneficiary_name">Description of support required <span
                                                        class="text-info" style="font-size: 10px">optional</span></label>
                                                <textarea type="text-area" class="form-control" id="summernote"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Animal care modal end--->

                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/socialwelfare.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Social Welfare</h3>
                                    <p class="card-text">Enhancing social welfare and support systems.</p>
                                    <a href="" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#welfareModal"> Add</a>
                                </div>
                            </div>
                        </div>
                        <!--Social welfare modal start-->
                        <div class="modal fade bd-example-modal-lg" id="welfareModal" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary">Add Social Welfare Beneficiary</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Program Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Institution Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="institution_name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Target Group<span
                                                        class="text-danger">*</span></label>
                                                <select id="inputState" class="form-select wide">
                                                    <option selected>Select Level of Education</option>
                                                    <option>Low Income Families</option>
                                                    <option>Orphans</option>
                                                    <option>Elderly</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Program Type<span
                                                        class="text-danger">*</span></label>
                                                <select id="inputState" class="form-select wide">
                                                    <option selected>Select program type</option>
                                                    <option>Food Distribution</option>
                                                    <option>Housing Assistance</option>
                                                    <option>Counseling Service</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Location <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Number of individuals benefitting<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Specific Needs<span
                                                        class="text-danger">*</span></label>
                                                <select id="inputState" class="form-select wide">
                                                    <option selected>Select program type</option>
                                                    <option>Food Supplies</option>
                                                    <option>Clothing</option>
                                                    <option>Counseling Service</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Contact Person <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name"
                                                    placeholder="Enter Contact Person Name">
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
                                                <label for="beneficiary_name">Description of support required <span
                                                        class="text-info" style="font-size: 10px">optional</span></label>
                                                <textarea type="text-area" class="form-control" id="summernote"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---Social welfare modal end-->

                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/emergency.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Emergency Relief</h3>
                                    <p class="card-text">Providing assistance during emergencies.</p>
                                    <a href="" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#emergencyReliefModal"> Add</a>
                                </div>
                            </div>
                        </div>

                        <!---Emergency Relief modal start-->
                        <div class="modal fade bd-example-modal-lg" id="emergencyReliefModal" tabindex="-1"
                            role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary">Add Emergency Relief Beneficiary</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="animalcare_beneficiary_name">Relief Effort Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="animalcare_beneficiary_name"
                                                    placeholder="Enter organization name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Type of Disaster/Emergency <span
                                                        class="text-danger">*</span></label>
                                                <select id="animal_support" class="form-select">
                                                    <option selected>Select disaster/emergency Type</option>
                                                    <option>Natural Disaster</option>
                                                    <option>War</option>
                                                    <option>Pandemic</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Immediate Needs<span
                                                        class="text-danger">*</span></label>
                                                <select id="animal_species" class="form-select">
                                                    <option selected>Select animal species supported</option>
                                                    <option>Shelter</option>
                                                    <option>Food</option>
                                                    <option>Medical Supplies</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Number of Individuals<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="healthcare_location">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Relief TImeline <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="relief_timeline"
                                                    placeholder="Enter relief timeline">
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Location<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="relief_timeline"
                                                    placeholder="Enter location">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Person <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="emergency_beneficiary_name"
                                                    placeholder="Enter Contact Person Name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Email <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="emergency_beneficiary_email"
                                                    placeholder="Enter contact person email">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Person Phone <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="emergency_beneficiary_phone"
                                                    placeholder="Enter contact person phone number">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="beneficiary_name">Description of support required <span
                                                        class="text-info" style="font-size: 10px">optional</span></label>
                                                <textarea type="text-area" class="form-control" id="summernote"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Emergency relief modal end--->

                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/environmental.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Environmental Protection</h3>
                                    <p class="card-text">Conserving and protecting the environment.</p>
                                    <a href="" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#environmentalProtectionModal"> Add</a>
                                </div>
                            </div>
                        </div>

                        <!---Environmental Protection modal start-->
                        <div class="modal fade bd-example-modal-lg" id="environmentalProtectionModal" tabindex="-1"
                            role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary">Add Environmental Protection Beneficiary</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="animalcare_beneficiary_name">Project Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="animalcare_beneficiary_name" placeholder="Enter project name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Type of Initiative <span
                                                        class="text-danger">*</span></label>
                                                <select id="animal_support" class="form-select">
                                                    <option selected>Select Initiative Type</option>
                                                    <option>Reforestation</option>
                                                    <option>Clean Water</option>
                                                    <option>Wildfire Conservation</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Environmental Goals<span
                                                        class="text-danger">*</span></label>
                                                <select id="animal_species" class="form-select">
                                                    <option selected>Select environmental goals</option>
                                                    <option>Planting Trees</option>
                                                    <option>Reducing Pollution</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Required Resources<span
                                                        class="text-danger">*</span></label>
                                                <select id="care_needs" class="form-select">
                                                    <option selected>Select required resources</option>
                                                    <option>Volunteers</option>
                                                    <option>Equipment</option>
                                                    <option>Funding</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Location <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="healthcare_location"
                                                    placeholder="Enter Location">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Number Of Areas Impacted <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="areas_impacted"
                                                    placeholder="Enter Areas Impacted">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Person <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="healthcare_beneficiary_name"
                                                    placeholder="Enter Contact Person Name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Email <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="healthcare_beneficiary_email"
                                                    placeholder="Enter contact person email">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Person Phone <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="healthcare_beneficiary_phone"
                                                    placeholder="Enter contact person phone number">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="beneficiary_name">Description of support required <span
                                                        class="text-info" style="font-size: 10px">optional</span></label>
                                                <textarea type="text-area" class="form-control" id="summernote"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Environmental Protection modal end--->

                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/community.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Community Development</h3>
                                    <p class="card-text">Fostering growth and development in communities.</p>
                                    <a href="" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#communityDevelopmentModal"> Add</a>
                                </div>
                            </div>
                        </div>

                        <!---Community Dev't modal start-->
                        <div class="modal fade bd-example-modal-lg" id="communityDevelopmentModal" tabindex="-1"
                            role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary">Add Community Development Beneficiary</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="animalcare_beneficiary_name">Project Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="animalcare_beneficiary_name" placeholder="Enter project name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Target Community<span
                                                        class="text-danger">*</span></label>
                                                <select id="animal_support" class="form-select">
                                                    <option selected>Select Target Group</option>
                                                    <option>Urban</option>
                                                    <option>Rural</option>
                                                    <option>Indigenous</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Type of Development<span
                                                        class="text-danger">*</span></label>
                                                <select id="animal_species" class="form-select">
                                                    <option selected>Select development type</option>
                                                    <option>Infrastructure</option>
                                                    <option>Education</option>
                                                    <option>Economic Empowerment</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Educational Needs<span
                                                        class="text-danger">*</span></label>
                                                <select id="care_needs" class="form-select">
                                                    <option selected>Select required resources</option>
                                                    <option>Books</option>
                                                    <option>Scholarships</option>
                                                    <option>Infrastructure</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Location <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="healthcare_location"
                                                    placeholder="Enter Location">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Number Of Beneficiaries <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="areas_impacted"
                                                    placeholder="Enter number of  beneficiaries">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Person <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="healthcare_beneficiary_name"
                                                    placeholder="Enter Contact Person Name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Email <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="healthcare_beneficiary_email"
                                                    placeholder="Enter contact person email">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Person Phone <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="healthcare_beneficiary_phone"
                                                    placeholder="Enter contact person phone number">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="beneficiary_name">Description of support required <span
                                                        class="text-info" style="font-size: 10px">optional</span></label>
                                                <textarea type="text-area" class="form-control" id="summernote"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Community Dev't modal end--->

                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/disability.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Persons with Disability</h3>
                                    <p class="card-text">Supporting individuals with disabilities.</p>
                                    <a href="" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#disabilityModal"> Add</a>
                                </div>
                            </div>
                        </div>

                        <!--Disability modal start-->
                        <div class="modal fade bd-example-modal-lg" id="disabilityModal" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary">Add Disability Beneficiary</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Beneficiary Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name"
                                                    placeholder="Enter Beneficiary Name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Type of Disability Support<span
                                                        class="text-danger">*</span></label>
                                                <select id="healthcare_condition" class="form-select wide">
                                                    <option selected>Select Disablitiy Support Type</option>
                                                    <option>Mobility Aids</option>
                                                    <option>Rehabilitation</option>
                                                    <option>Inclusibve Education</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Location <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Number Of Individuals Benefitting <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Specific Needs<span
                                                        class="text-danger">*</span></label>
                                                <select id="inputState" class="form-select wide">
                                                    <option selected>Select educational needs</option>
                                                    <option>Assistive Devices</option>
                                                    <option>Accessibility Improvements</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="beneficiary_name">Contact Person <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="beneficiary_name"
                                                    placeholder="Enter Contact Person Name">
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
                                                <label for="beneficiary_name">Description of support required <span
                                                        class="text-info" style="font-size: 10px">optional</span></label>
                                                <textarea type="text-area" class="form-control" id="summernote"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---Disability modal end-->

                        <div class="col-md-4 mb-3 mb-sm-0">
                            <div class="card shadow">
                                <img class="" src="{{ asset('assets/images/beneficiary/singlepatient.jpg') }}"
                                    class="card-img-top" alt="education beneficiary">
                                <div class="card-body">
                                    <h3 class="card-title">Single Patient Support</h3>
                                    <p class="card-text">Assisting patients in need of medical support.</p>
                                    <a href="" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#singlePatientModal"> Add</a>
                                </div>
                            </div>
                        </div>

                        <!---Single Patient modal start-->
                        <div class="modal fade bd-example-modal-lg" id="singlePatientModal" tabindex="-1"role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary">Add Single Patient Beneficiary</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="animalcare_beneficiary_name">Beneficiary Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="animalcare_beneficiary_name"
                                                    placeholder="Enter organization name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Patient ID<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="healthcare_location"
                                                    placeholder="Enter Patient ID">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Type of Support<span
                                                        class="text-danger">*</span></label>
                                                <select id="animal_support" class="form-select">
                                                    <option selected>Select Type of support</option>
                                                    <option>Medical Supplies</option>
                                                    <option>Therapy</option>
                                                    <option>Medication</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Health Condition<span
                                                        class="text-danger">*</span></label>
                                                <select id="animal_species" class="form-select">
                                                    <option selected>Select health Condition</option>
                                                    <option>Cancer</option>
                                                    <option>Chronic Illness</option>
                                                    <option>Disability</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Location<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="healthcare_location">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Medical Needs<span
                                                        class="text-danger">*</span></label>
                                                <select id="animal_species" class="form-select">
                                                    <option selected>Select medical needs</option>
                                                    <option>Surgery</option>
                                                    <option>Medication</option>
                                                    <option>Rehabilitation</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Treatment Facility Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="relief_timeline"
                                                    placeholder="Enter treatment facility name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Treatment Facility Address <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="relief_timeline"
                                                    placeholder="Enter facility address">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Treatment Timeline<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="relief_timeline"
                                                    placeholder="Enter treatment timeline">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Person <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="emergency_beneficiary_name"
                                                    placeholder="Enter Contact Person Name">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Email <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="emergency_beneficiary_email"
                                                    placeholder="Enter contact person email">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="beneficiary_name">Contact Person Phone <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="emergency_beneficiary_phone"
                                                    placeholder="Enter contact person phone number">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="beneficiary_name">Description of support required <span
                                                        class="text-info" style="font-size: 10px">optional</span></label>
                                                <textarea type="text-area" class="form-control" id="summernote"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single Patient modal end--->

                        <!----Card List End--->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
                            Content body end
                        ***********************************-->
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

@section('scripts')
@if (session('success'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
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
            timer: 15000,
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