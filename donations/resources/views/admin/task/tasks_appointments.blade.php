@extends('layouts.admin')

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Calendar</a></li>
            </ol>
            <a class="text-primary fs-13" data-bs-toggle="modal" role="button"  data-bs-target="#addEventModal">+ Add Event</a>
        </div>
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="calendar" class="app-fullcalendar"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--**********************************
                Content body end
            ***********************************-->

    <!--**********************************
                Add Event Modal start--->
    <div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEventModalLabel">Add Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addEventForm">
                    <div class="mb-3">
                        <label for="eventTitle" class="form-label">Event Title</label>
                        <input type="text" class="form-control" id="eventTitle" name="eventTitle" placeholder="Enter event title" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventDate" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="eventDate" name="eventDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventTime" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="eventTime" name="eventTime" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventTime" class="form-label">Event Time</label>
                        <input type="time" class="form-control" id="eventTime" name="eventTime" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="eventDescription" name="eventDescription" rows="3" placeholder="Enter event description"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-outline-success" form="addEventForm">Save Event</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>
    <!--**********************************
                Add Event Modal end
            ***********************************-->
@endsection
