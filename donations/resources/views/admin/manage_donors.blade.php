@extends('layouts.admin')

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="javascript:void(0)">Manage Donors</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
            </ol>
        </div>
        <!-- container starts -->
        <div class="container-fluid">

            <!-- row -->
            <div class="element-area">
                <div class="demo-view">
                    <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                        <div class="row">
                            <!-- Column starts -->
                            <div class="col-xl-12">
                                <div class="card dz-card" id="accordion-three">
                                    <div class="card-header flex-wrap d-flex justify-content-between">
                                        <div>
                                            <h4 class="card-title">Donors Table</h4>
                                            <span class="text-primary">Manage all donors</span>
                                        </div>
                                        <ul class="nav nav-tabs dzm-tabs" id="myTab-2">
                                            <li class="nav-item">
                                                <button class="btn btn-sm border-0 btn-outline-primary"> <i class="fa-solid fa-file-excel"></i> Export as CSV</button>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <!-- /tab-content -->
                                    <div class="tab-content" id="myTabContent-2">
                                        <div class="tab-pane fade show active" id="withoutSpace" role="tabpanel"
                                            aria-labelledby="home-tab-2">
                                            <div class="card-body pt-0">
                                                <div class="table-responsive">
                                                    <table id="example3" class="display table" style="min-width: 845px">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Preference</th>
                                                                <th>Org. Name</th>
                                                                <th>Campaign</th>
                                                                <th>Phone</th>
                                                                <th>Email</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Tiger Nixon</td>
                                                                <td>One Time</td>
                                                                <td>Lifeline</td>
                                                                <td>Aburi M/A School</td>
                                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                                <td><a
                                                                        href="javascript:void(0);"><strong>info@lifeline.com</strong></a>
                                                                </td>
                                                                <td><span class="badge light badge-success">Active</span></td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <a href="#"
                                                                            class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                                class="fas fa-pencil-alt"></i></a>
                                                                        <a href="#"
                                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!--**********************************
                    Content body end
                ***********************************-->
@endsection
