<?php

use App\Http\Controllers\file_upload\ChangeProfilePhotoController;
use App\Http\Controllers\file_upload\AadharController;
use App\Http\Controllers\file_upload\DrivingController;
use App\Http\Controllers\file_upload\PanController;
use App\Http\Controllers\file_upload\PassbookController;
use App\Http\Controllers\file_upload\ResumeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Portal\AjaxAPIController;
use App\Http\Controllers\Portal\HomeController as PortalHomeController;
use App\Http\Controllers\Portal\JobController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// --------------------------------------------------------------------------------------- //
// ----------------------------------- Job Board ----------------------------------------- //
// --------------------------------------------------------------------------------------- //
Route::any('/home', [PortalHomeController::class,'index']);
Route::get('/about', [PortalHomeController::class, 'about']);
Route::get('/contact', [PortalHomeController::class, 'contact']);
Route::get('/blog', [PortalHomeController::class, 'blog']);
Route::get('/blog-single-post/{slug}', [PortalHomeController::class, 'single_blog']);
Route::get('/browse-jobs', [JobController::class,'browseJob']);
Route::get('/browse-categories', [PortalHomeController::class,'browseCategories']);
Route::get('/search-jobs', [JobController::class,'searchJob']);
// browse job by category
Route::get('/browse-jobs/category_id={id}', [JobController::class,'browseJobByCategory']);
// single job detail
Route::get('/job-page/category_id={category}&job_id={job_id}&location_id={location_id}&client_id={client_id}&enquiry_id={enquiry_id}', [JobController::class,'singleJob']);
Route::get('/terms', function(){
    return view('Portal.terms');
});

// Route::get('/home', function(){
//     return view('home');
// });
Route::get('/resend-otp', [HomeController::class,'resendOTP']);
Route::group(['middleware' => 'loginAuth'],function(){
    Route::get('/login', [HomeController::class,'index']);
    Route::post('/login', [HomeController::class,'login']);
    Route::get('/verify-otp', [HomeController::class,'viewOTP']);
    Route::post('/verify-otp', [HomeController::class,'verifyOTP']);
    Route::get('/user-detail', [HomeController::class,'welcome']);
    Route::get('/profile', [HomeController::class,'profile']);
    Route::get('/get-zones', [HomeController::class,'getZones']);
    Route::get('/set-candidate-detail',[HomeController::class,'setCandidateDetail']);

    Route::post('/profile/change-profile_photo', [ChangeProfilePhotoController::class,'changeProfilePhoto']);
    Route::post('/file-upload/resume', [ResumeController::class,'uploadResume']);
    Route::get('/print/resume', [ResumeController::class,'printResume']);
    Route::post('/file-upload/aadhar-card', [AadharController::class,'uploadAadharCard']);
    Route::get('/print/aadhar-card', [AadharController::class,'printAadharCard']);
    Route::post('/file-upload/pan-card', [PanController::class,'uploadPanCard']);
    Route::get('/print/pan-card', [PanController::class,'printPanCard']);
    Route::post('/file-upload/driving-licence', [DrivingController::class,'uploadDrivingLicence']);
    Route::get('/print/driving-licence', [DrivingController::class,'printDrivingLicence']);
    Route::post('/file-upload/passbook', [PassbookController::class,'uploadPassbook']);
    Route::get('/print/passbook', [PassbookController::class,'printPassbook']);
});

Route::get('/logout',function(){
    session()->forget('candidate_id');
    session()->forget('phone');
    session()->forget('job_id');
    return redirect('login');
});


Route::get('test',function(){
    return view('test');
});

Route::get('test2',[HomeController::class,'test2']);

Route::post('create-candidate',[HomeController::class,'createCandidate']);
Route::get('create-candidate', function(){
    return view('test2');
});

Route::get('mylogin',function(){
    return view('mylogin');
});

// Route::get('testing', [HomeController::class,'testing']);
Route::get('testing', function(){
    return view('testing');
});

// ---------------------------------------------------------------------------------------- //
// ---------------------------------- AJAX API -------------------------------------------- //
// ---------------------------------------------------------------------------------------- //
Route::get('/home-page', [AjaxAPIController::class,'index']);
Route::get('/all-jobs', [AjaxAPIController::class,'browseJobs']);
Route::get('/sort-jobs', [AjaxAPIController::class,'sortJobs']);
Route::get('/filter-jobs', [AjaxAPIController::class,'filterJobs']);
Route::get('/jobs-by-category', [AjaxAPIController::class,'jobsByCategory']);
Route::get('/single-job', [AjaxAPIController::class,'singleJob']);
Route::get('/search', [AjaxAPIController::class,'searchJobs']);