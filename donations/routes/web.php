<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\BeneficiaryController;

Route::get('/', function () {
    return view('admin.dashboard');
});
// Routes for Donors
Route::get('/donors', [DonorController::class, 'index'])->name('manage_donors');
Route::get('/donors/create', [DonorController::class, 'create'])->name('add_donors_create');
Route::post('/donors', [DonorController::class, 'store'])->name('add_donors.store');
// Route::get('/donors/{id}/show', [DonorController::class, 'show'])->name('view_donors');
// Route::get('/donors/{id}/edit', [DonorController::class, 'edit'])->name('add_donors.edit');
Route::put('/donors/{id}', [DonorController::class, 'update']);
Route::delete('/donors/{id}', [DonorController::class, 'destroy'])->name('delete_donors');

// Routes for Campaigns
Route::get('/campaigns', [CampaignController::class, 'index'])->name('add_campaign');
Route::get('/campaigns/manage', [CampaignController::class, 'manage'])->name('manage_campaign');
Route::post('/campaigns', [CampaignController::class, 'store'])->name('add_campaign.store');
Route::get('/campaigns/{id}/show', [CampaignController::class, 'show'])->name('manage_campaign.show');
Route::get('/campaigns/{id}/edit', [CampaignController::class, 'edit'])->name('add_campaign.edit');
Route::put('/campaigns/{id}', [CampaignController::class, 'update'])->name('add_campaign.update');
Route::delete('/campaigns/{id}', [CampaignController::class, 'destroy'])->name('add_campaign.destroy');

// Route for Beneficiaries
Route::get('/beneficiaries', [BeneficiaryController::class, 'index'])->name('add_beneficiary');
Route::get('/beneficiaries/create', [BeneficiaryController::class, 'create'])->name('add_beneficiary_create');
Route::post('/beneficiaries', [BeneficiaryController::class, 'store'])->name('add_beneficiary.store');
Route::get('/beneficiaries/{id}/show', [BeneficiaryController::class, 'show'])->name('view_beneficiary');
Route::get('/beneficiaries/{id}/edit', [BeneficiaryController::class, 'edit'])->name('add_beneficiary.edit');
Route::put('/beneficiaries/{id}', [BeneficiaryController::class, 'update'])->name('add_beneficiary.update');
Route::delete('/beneficiaries/{id}', [BeneficiaryController::class, 'destroy'])->name('delete_beneficiary');