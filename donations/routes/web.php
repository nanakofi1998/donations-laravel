<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\CampaignController;

Route::get('/', function () {
    return view('admin.add_campaign');
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
Route::get('/campaigns/create', [CampaignController::class, 'create'])->name('add_campaign.create');
Route::post('/campaigns', [CampaignController::class, 'store'])->name('add_campaign.store');
Route::get('/campaigns/manage', [CampaignController::class, 'show'])->name('add_campaign.show');
Route::get('/campaigns/{id}/edit', [CampaignController::class, 'edit'])->name('add_campaign.edit');
Route::put('/campaigns/{id}', [CampaignController::class, 'update'])->name('add_campaign.update');
Route::delete('/campaigns/{id}', [CampaignController::class, 'destroy'])->name('add_campaign.destroy');