<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CreateNewUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CrowdFundingController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UserEventController;

// User Authentication Routes
Route::get('/', function () { return view('auth.login');})->name('login');
Route::get('/signup', [UserController::class, 'create'])->name('signup');
Route::post('/signup', [UserController::class, 'store'])->name('signup.store');
Route::get('/reset-password', [UserController::class, 'edit'])->name('reset-password');
Route::post('/reset-password', [UserController::class, 'update'])->name('reset-password.update');
Route::get('/dashboard', function() {return view('admin.dashboard');})->name('dashboard');


// Route for creating a new user
Route::get('/create-user', [CreateNewUserController::class, 'create'])->name('create_user');
Route::get('/manage-user', [CreateNewUserController::class, 'index'])->name('manage_user');

// Route::get('/logout', function () { return view('auth.login');})->name('logout');
// Route::post('/logout', [UserController::class, 'destroy'])->name('logout');
// Dashboard Route
// Route::get('/user-dashboard', function () { return view('user.dashboard');})->name('user_dashboard');
// Routes for Donors
Route::get('/donors', [DonorController::class, 'index'])->name('manage_donors');
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

// Route for Profile Settings
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Route for User Dashboard
Route::get('/user-dashboard', [UserDashboardController::class, 'index'])->name('user_dashboard');

// Route for crowd funding
Route::get('/crowd-funding', [CrowdFundingController::class, 'index'])->name('crowd_funding');
Route::get('/crowd-funding/create', [CrowdFundingController::class, 'create'])->name('crowd_funding_create');

// Route for User Settings
Route::get('/auth-settings', [UserAuthController::class, 'create'])->name('auth_settings');
Route::get('/account', function() {return view('user.account');})->name('account');
Route::get('/settings', function() {return view('user.settings');})->name('settings');

// Route for User Event Calendar
Route::get('/user-calendar', [UserEventController::class, 'index'])->name('user_calendar');