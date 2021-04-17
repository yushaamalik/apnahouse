<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('home', 'AdminController@dashboard')->name('dashboard');

//Profiles
Route::get('all-profiles', 'ArchitectProfilesController@allProfiles')->name('architect.allProfiles'); 
Route::get('pending-profiles', 'ArchitectProfilesController@pendingProfiles')->name('architect.pendingProfiles');
Route::get('view-architectProfile/{id}', 'ArchitectProfilesController@single')->name('architect.architectProfile');
Route::put('approve-profile/{id}', 'ArchitectProfilesController@approveProfile' )->name('architect.approve');
Route::put('reject-profile/{id}', 'ArchitectProfilesController@rejectProfile' )->name('architect.reject');


//Plans
Route::get('all-plans', 'PlansController@allPlans')->name('plan.allPlans');
Route::get('pending-plans', 'PlansController@pendingPlans')->name('plan.pendingPlans');
Route::get('view-plan/{id}', 'PlansController@single')->name('plan.viewPlan');
Route::put('approve-plan/{id}', 'PlansController@approvePlan')->name('plan.approve');
Route::put('reject-plan/{id}', 'PlansController@rejectPlan')->name('plan.reject');



