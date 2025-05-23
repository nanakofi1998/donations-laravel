@extends('layouts.user')

@section('user_content')

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
                                            <span class="text-primary">Manage all donors</span>
                                        </div>
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
                                                                <th>Funding Name</th>
                                                                <th>Funding Purpose</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Awele</td>
                                                                <td>Healthcare</td>
                                                                <td>
                                                                    <span class="badge rounded-pill badge-success">Active</span>
                                                                </td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Pause</a>
                                                                            <a class="dropdown-item" href="#">Stop</a>
                                                                            <a class="dropdown-item" href="#">Repost</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                {{-- @empty
                                                                <tr>
                                                                    <td colspan="8" class="text-center text-muted">No donors available</td>
                                                                </tr>
                                                            @endforelse --}}
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