@extends('layouts.admin')

@section('content')

<div class="content-body">
    <!-- row -->	
    <div class="page-titles">
        <ol class="breadcrumb">
            <li><h5 class="bc-title">Analytics</h5></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Home </a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
        </ol>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-xxl-4">
                <div class="card h-auto">
                    <div class="card-header">
                        <h4 class="heading mb-0 text-primary"><strong>Donor, Beneficiary and Campaign Analytics</strong></h4>
                    </div>
                    <div class="card-body">
                        <form class="finance-hr">
                            <div class="form-group mb-3">
                                <label class="text-secondary font-w500">Select type <span class="text-danger">*</span>
                              </label>
                              <select name="" id="" class="form-select " aria-label="Default select example">
                                <option selected>Select from list</option>
                                <option value="">Donor</option>
                                <option value="">Beneficiary</option>
                                <option value="">Campaign</option>
                              </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-secondary font-w500"> <span class="text-danger">*</span>
                              </label>
                              <select name="" id="" class="form-select " aria-label="Default select example">
                                <option selected>Select from list</option>
                                <option value="">Donor</option>
                                <option value="">Beneficiary</option>
                                <option value="">Campaign</option>
                              </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-secondary"> Account No<span class="text-danger">*</span>
                              </label>
                              <input type="number" class="form-control"  placeholder="123456">
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-secondary">Branch Code<span class="text-danger">*</span>
                              </label>
                              <input type="number" class="form-control"  placeholder="#321456">
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-secondary">Branch Name<span class="text-danger">*</span>
                              </label>
                              <input type="text" class="form-control"  placeholder="Industrial and Commercial Bank of China Limited">
                            </div>
                            <button type="submit" class="btn btn-outline-dark mb-3">Analyze</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-xxl-8">
                <div class="card">
                    <div class="card-body p-0">
                        <h4 class="heading mb-0 text-center mt-4"><strong>Analyzed Data</strong></h4>
                        <canvas id="financeChart"></canvas>
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