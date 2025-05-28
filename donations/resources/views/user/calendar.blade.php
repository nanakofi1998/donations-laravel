@extends('layouts.user')

@section('user_content')

 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Calendar</a></li>
						<li class="breadcrumb-item active"><a href="{{route('user_dashboard')}}">Dashboard</a></li>
					</ol>
                </div>
            <div class="container-fluid">
				
                <!-- row -->

                <div class="row">
                    <div class="col-xl-2 col-xxl-2">
                        <div class="card bg-danger text-white shadow-sm rounded-3 border-0">
                            <div class="card-body p-3">
                                <h5 class="mb-2 fw-bold">Create Event</h5>
                                <p class="mb-0 small">To add an event, click on the date(s) and add the event name </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card h-100 shadow-sm rounded-3 border-0">
                            <div class="card-body p-3">
                                <div id="calendar" class="app-fullcalendar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN MODAL -->
                    <div class="modal fade none-border" id="event-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Add New Event</strong></h4>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                                        event</button>

                                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-bs-toggle="modal">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Add Category -->
                    <div class="modal fade none-border" id="add-category">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Add a category</strong></h4>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label form-label">Category Name</label>
                                                <input class="form-control form-white" placeholder="Category Name" type="text" name="category-name">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label form-label">Choose Category Color</label>
                                                <select class="form-control default-select form-white" data-placeholder="Choose a color..." name="category-color">
                                                    <option value="success">Success</option>
                                                    <option value="danger">Danger</option>
                                                    <option value="info">Info</option>
                                                    <option value="pink">Pink</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="warning">Warning</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light waves-effect" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary waves-effect waves-light save-category" data-bs-toggle="modal">Save</button>
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