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
                                            <span class="text-primary">Manage all donors</span>
                                        </div>
                                        <ul class="nav nav-tabs dzm-tabs" id="myTab-2">
                                            <li class="nav-item">
                                                <a href="{{ route('manage_donors') }}?export=csv&{{ http_build_query(request()->except('export')) }}"
                                                    class="btn btn-sm border-0 btn-outline-primary">
                                                    <i class="fa-solid fa-file-excel"></i> Export as CSV
                                                </a>
                                                
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
                                                                <th>Inst. Name</th>
                                                                <th>Campaign</th>
                                                                <th>Phone</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse ($donors as $donor)
                                                            <tr>
                                                                <td>{{$donor->full_name}}</td>
                                                                <td>{{ ucfirst (str_replace ('_', ' ', $donor->donation_preference ))}}</td>
                                                                <td>{{ $donor->organization_name}}</td>
                                                                <td>
                                                                    @if( $donor->campaigns->isNotEmpty())
                                                                        {{ $donor->campaigns->pluck('campaign_name')->join(', ') }}
                                                                    @else
                                                                        <span class="badge rounded-pill badge-secondary">No Campaign</span>   
                                                                    @endif
                                                                </td>
                                                                <td><strong>{{ $donor->donor_phone}}</strong></td>
                                                                <td><strong>{{ $donor->donor_email}}</strong></td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <button 
                                                                        class="btn btn-primary shadow btn-xs sharp me-1 edit-btn" 
                                                                        data-bs-toggle="modal"  
                                                                        data-bs-target="#editDonorModal"
                                                                        data-id="{{ $donor->id }}"
                                                                        data-f_name="{{ $donor->f_name }}"
                                                                        data-l_name="{{ $donor->l_name }}"
                                                                        data-phone="{{ $donor->donor_phone }}"
                                                                        data-email="{{ $donor->donor_email }}"
                                                                        data-preference="{{ $donor->donation_preference }}"
                                                                        data-organization="{{ $donor->organization_name }}"
                                                                         >
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                        </button>
                                                                        <form action=" {{ route('delete_donors', $donor->id) }}" method="POST" class="delete-form">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>

                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                @empty
                                                                <tr>
                                                                    <td colspan="8" class="text-center text-muted">No donors available</td>
                                                                </tr>
                                                            @endforelse
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
    <!-- Edit Donor Modal -->
    <!-- Edit Donor Modal -->
<div class="modal fade" id="editDonorModal" tabindex="-1" aria-labelledby="editDonorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="POST" id="editDonorForm">
          @csrf
          @method('PUT')
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Donor</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Hidden ID -->
              <input type="hidden" id="edit-donor-id" name="id">
          
              <!-- First Row -->
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label>First Name</label>
                  <input type="text" class="form-control" id="edit-f-name" name="f_name" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label>Last Name</label>
                  <input type="text" class="form-control" id="edit-l-name" name="l_name" required>
                </div>
              </div>
          
              <!-- Second Row -->
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label>Phone</label>
                  <input type="text" class="form-control" id="edit-phone" name="donor_phone">
                </div>
                <div class="col-md-6 mb-3">
                  <label>Email</label>
                  <input type="email" class="form-control" id="edit-email" name="donor_email">
                </div>
              </div>
          
              <!-- Third Row -->
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label>Donation Preference</label>
                  <select class="form-control" id="edit-preference" name="donation_preference">
                    <option value="one_time">One Time</option>
                    <option value="recurring">Recurring</option>
                    <option value="crowd_funding">Crowd Funding</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label>Organization</label>
                  <input type="text" class="form-control" id="edit-org" name="organization_name">
                </div>
              </div>
            </div>
          
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="saveChangesBtn">
                    <span class="spinner-border spinner-border-sm d-none" role="status" id="edit-spinner" aria-hidden="true"></span>
                    Save Changes
                </button>                
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
          
      </form>
    </div>
  </div>

  @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            timer: 1500,
            showConfirmButton: false
        });
    </script>
@endif

@endsection
