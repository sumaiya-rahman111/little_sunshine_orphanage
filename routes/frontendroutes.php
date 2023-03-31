<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Navz;
use App\Http\Controllers\Backend\Manage;
use App\Http\Controllers\Backend\InvolveClass;
use App\Http\Controllers\Frontend\NavController;
use App\Http\Controllers\Frontend\SocialLogin;
use App\Http\Controllers\Frontend\FrontendRqstController;
use App\Http\Controllers\Frontend\SingleNewsController;
use App\Http\Controllers\Frontend\AdoptionController;
use App\Http\Controllers\Frontend\VolunteerController;
use App\Http\Controllers\Frontend\PartnerController;
use App\Http\Controllers\Frontend\SponsorController;




Route::get('/',[Navz::class,'frontendshow'])->name('homepage');
Route::get('/orphanDetails{id}',[Navz::class,'orphanDetails'])->name('orphanDetails');
Route::get('/orphanages',[NavController::class,'orphanageShow'])->name('showOrphanage');
Route::get('/orphanageDetails{id}',[Manage::class,'orphanageDetails'])->name('orphanageDetails');
Route::get('/about',[NavController::class,'showAbout'])->name('showAbout');
Route::get('/facilities',[NavController::class,'showFac'])->name('showFac');
Route::get('/events',[NavController::class,'showEve'])->name('showEve');
Route::get('/insights',[NavController::class,'showIsts'])->name('showIsts');
Route::get('/contribute',[NavController::class,'showCntrbt'])->name('showCntrbt');
Route::get('/achievement',[NavController::class,'showAch'])->name('showAch');
Route::get('/volunt',[NavController::class,'volunt'])->name('volunt');


// adoption starts
Route::get('/adoptSpecific{id}',[Navz::class,'adoptSpecific'])->name('adoptSpecific');
Route::get('/adoption',[AdoptionController::class,'showAdpt'])->name('showAdpt');
Route::post('/adoptionRequestSubmit{id}',[AdoptionController::class,'adoptionRequestSubmit'])->name('adoptionRequestSubmit');
Route::get('manageMyRequests',[AdoptionController::class,'show'])->name('manageMyRequests');
Route::get('detailMyRequest/{id}',[AdoptionController::class,'details'])->name('adoptionDetails');
Route::post('/adoptionRequest',[AdoptionController::class,'insert'])->name('adoptionRequestSubmitNav');
// adoption ends


// social login starts
Route::get('/loginwithgoogle',[SocialLogin::class,'gotogoogle'])->name('loginwithgoogle');
Route::get('/socialDataStore',[SocialLogin::class,'store'])->name('socialDataStore');
// social login ends

// news section starts
Route::get('/news/{id}',[SingleNewsController::class,'singleNews'])->name('singleNews');
Route::post('/newsFeedback/{id}',[SingleNewsController::class,'newsFeedback'])->name('newsFeedback');
Route::get('/newsFeedbackdlt/{id}',[SingleNewsController::class,'newsFeedbackdlt'])->name('newsFeedbackdlt');
Route::get('/showOrphan',[NavController::class,'showOrphan'])->name('showOrphan');
// news section ends


// volunteer section starts
Route::get('/volunteerDetails/{id}',[VolunteerController::class,'show'])->name('volunteerDetails');
// volunteer section ends


// partner section starts
Route::post('/storePartnerRequest',[PartnerController::class,'store'])->name('inspartner');
// partner section ends


// sponsor section starts
Route::post('/storeSponsorrRequest',[SponsorController::class,'store'])->name('insponsor');
// sponsor section ends
