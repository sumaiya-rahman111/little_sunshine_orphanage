<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Navz;
use App\Http\Controllers\Backend\Manage;
use App\Http\Controllers\Backend\SignedUp;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\InvolveClass;
use App\Http\Controllers\Backend\FacilitiesClass;
use App\Http\Controllers\Backend\EventsClass;
use App\Http\Controllers\Backend\NewsClass;
use App\Http\Controllers\Backend\OrphanageController;
use App\Http\Controllers\Backend\OrphanController;
use App\Http\Controllers\Frontend\AdoptionController;
use App\Http\Controllers\Frontend\VolunteerController;
use App\Http\Controllers\Frontend\SponsorController;
use App\Http\Controllers\Frontend\PartnerController;


// default from breeze


Route::get('/admin',[Navz::class,'showAdmin'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// default from breeze ends



Route::middleware('auth')->group(function(){
    
    
    
    // ======================== frontend starts ======================
    
    
    
    // about section starts
    Route::get('/addabout',[AboutController::class,'index'])->name('addAbout');
    Route::get('/selectabout/{id}',[AboutController::class,'selectStore'])->name('selectStoreAbout');
    Route::post('/insertabout',[AboutController::class,'store'])->name('insertAbout');
    Route::get('/manageabout',[AboutController::class,'show'])->name('manageAboutOption');
    Route::get('/deleteabout/{id}',[AboutController::class,'destroy'])->name('dltAbout');
    Route::get('/editabout/{id}',[AboutController::class,'edit'])->name('edtAbout');
    Route::get('/moreDetails/{id}',[AboutController::class,'moreDetails'])->name('moreDetails');
    Route::post('/updateabout/{id}',[AboutController::class,'update'])->name('updateAbout');
    // about section ends
    
    
    // involve section starts
    Route::get('/addInvolve',[InvolveClass::class,'index'])->name('addinvolve');
    Route::post('/addInvolve',[InvolveClass::class,'store'])->name('insertInvolve');
    Route::get('/manageInvolve',[InvolveClass::class,'show'])->name('manageInvolve');
    Route::get('/editInvolve/{id}',[InvolveClass::class,'edit'])->name('editInvolve');
    Route::post('/updateInvolve/{id}',[InvolveClass::class,'update'])->name('updateInvolve');
    Route::get('/detailsInvolve/{id}',[InvolveClass::class,'details'])->name('detailsInvolve');
    Route::get('/manageInvolve/{id}',[InvolveClass::class,'destroy'])->name('delInvolve');
    Route::get('/partner',[InvolveClass::class,'partner'])->name('partner');
    Route::get('/sponsor',[SponsorController::class,'index'])->name('sponsor');
    Route::get('/selectStore/{id}',[InvolveClass::class,'selectStore'])->name('selectStore');

    Route::get('/volunteer',[InvolveClass::class,'volunteer'])->name('volunteer');
    Route::post('/vRegistration',[VolunteerController::class,'store'])->name('vregistration');
    Route::post('/vbackRegistration',[VolunteerController::class,'backstore'])->name('vbackregistration');
    Route::get('/vRegStatus',[VolunteerController::class,'status'])->name('vregstatus');
    // involve section ends
    
    
    // facility section starts
    Route::get('/addFacilities',[FacilitiesClass::class,'index'])->name('addFacility');
    Route::get('/editFacilities/{id}',[FacilitiesClass::class,'edit'])->name('editFac');
    Route::get('/detailsFacilities/{id}',[FacilitiesClass::class,'details'])->name('detailsFacilities');
    Route::post('/insertFacilities',[FacilitiesClass::class,'store'])->name('insertFacilities');
    Route::post('/updateFacilities/{id}',[FacilitiesClass::class,'update'])->name('updateFacilities');
    Route::get('/manageFacilities',[FacilitiesClass::class,'show'])->name('manageFacilities');
    Route::get('/deleteFacilities/{id}',[FacilitiesClass::class,'destroy'])->name('deleteFacilities');
    // facility section ends
    
    
    // events section starts
    Route::get('/addEvents',[EventsClass::class,'index'])->name('addEvents');
    Route::post('/addEvents',[EventsClass::class,'store'])->name('insertEvents');
    Route::get('/manageEvents',[EventsClass::class,'show'])->name('manageEvents');
    Route::get('/editEvents/{id}',[EventsClass::class,'edit'])->name('editEvents');
    Route::post('/updateEvents/{id}',[EventsClass::class,'update'])->name('updateEvents');
    Route::get('/deleteEvents/{id}',[EventsClass::class,'destroy'])->name('deleteEvents');
    Route::get('/detailsEvents/{id}',[EventsClass::class,'details'])->name('detailsEvents');
    // events section ends
    
    
    // news section starts here
    Route::get('/addNews',[NewsClass::class,'index'])->name('addNews');
    Route::get('/detailsNews/{id}',[NewsClass::class,'details'])->name('detailsNews');
    Route::get('/editNews/{id}',[NewsClass::class,'edit'])->name('editNews');
    Route::post('/insertNews',[NewsClass::class,'store'])->name('insertNews');
    Route::get('/manageNews',[NewsClass::class,'show'])->name('manageNews');
    Route::get('/deleteNews/{id}',[NewsClass::class,'destroy'])->name('deleteNews');
    Route::post('/updateNews/{id}',[NewsClass::class,'update'])->name('updateNews');
    // news section ends
    
    // orphanages part starts
    Route::get('/addOrphanage',[OrphanageController::class,'index'])->name('addOrphanage');
    Route::post('/insertOrphanage',[OrphanageController::class,'store'])->name('insertOrphanage');
    Route::get('/manageOrphanage',[OrphanageController::class,'show'])->name('manageOrphanage');
    Route::get('/deleteOrphanage/{id}',[OrphanageController::class,'destroy'])->name('deleteOrphanage');
    Route::get('/detailsOrphanage/{id}',[OrphanageController::class,'details'])->name('detailsOrphanage');
    Route::get('/editOrphanage/{id}',[OrphanageController::class,'edit'])->name('editOrphanage');
    Route::post('/updateOrphanage/{id}',[OrphanageController::class,'update'])->name('updateOrphanage');
    // orphanages part ends
    
    
    // Orphan part starts
    // Route::get('/addOrphan',[Navz::class,'addOrphan'])->name('addOrphan');
    Route::get('/addOrphan',[OrphanController::class,'index'])->name('addOrphan');
    // Route::post('/addOrphan',[Manage::class,'insertOrphan'])->name('insertOrphan');
    Route::post('/addOrphan',[OrphanController::class,'store'])->name('insertOrphan');
    // Route::get('/deleteOrphan/{id}',[Manage::class,'deleteOrphan'])->name('deleteOrphan');
    Route::get('/deleteOrphan/{id}',[OrphanController::class,'destroy'])->name('deleteOrphan');
    // Route::get('/orphanList',[Navz::class,'orphanList'])->name('orphanList');
    Route::get('/orphanList',[OrphanController::class,'show'])->name('orphanList');
    Route::get('/orphanDetails/{id}',[OrphanController::class,'details'])->name('detailsOrphan');
    Route::get('/editOrphan/{id}',[OrphanController::class,'edit'])->name('editOrphan');
    Route::post('/updateOrphan/{id}',[OrphanController::class,'update'])->name('updateOrphan');
    // Orphan part ends
    
    // ================================= frontend ends ===============================
    
    
    
    
    
    
    
    
    // ======================== backend starts ===================================


    // table menu starts
    Route::get('/basicTable',[Navz::class,'basicTableShow'])->name('basicTable');
    Route::get('/extAffair',[Navz::class,'extAffair'])->name('extAffair');
    Route::get('/healthHistory',[Navz::class,'healthHistory'])->name('healthHistory');
    Route::get('/accounts',[Navz::class,'accounts'])->name('accounts');
    // table menu ends
    
    
    // contribution section starts
    Route::get('/addDonor',[Navz::class,'addDonor'])->name('addDonor');
    // contribution section ends here
    
    // adoption section starts
    Route::get('/adoptedBabyList',[Navz::class,'adoptedBabyList'])->name('adoptedBabyList');
    Route::get('/makeAdoption',[AdoptionController::class,'makeAdoption'])->name('makeAdoption');
    Route::get('/adoptionRequest',[AdoptionController::class,'adoptionRequest'])->name('adoptionRequest');
    Route::post('/makeBackAdoption',[AdoptionController::class,'storeback'])->name('makeBackAdoption');
    // adoption section ends
    
    
    // volunteer section starts
    Route::get('/backVolunteer',[VolunteerController::class,'index'])->name('backVolunteer');
    Route::get('/volunteerRequest',[Navz::class,'volunteerRequest'])->name('volunteerRequest');
    Route::get('/approvedRequest',[Navz::class,'approvedRequest'])->name('approvedRequest');
    Route::get('/acceptVolunteer/{id}',[VolunteerController::class,'accept'])->name('acceptVolunteer');
    Route::get('/deleteVolunteer/{id}',[VolunteerController::class,'destroy'])->name('deleteVolunteer');
    // volunteer section ends


    // partner section starts
    Route::get('/addpart',[PartnerController::class,'index'])->name("addpart");
    Route::get('/partnerRequest',[PartnerController::class,'partnerRequest'])->name("partnerRequest");
    Route::post('/partbackstore',[PartnerController::class,'backstore'])->name("partbackstore");
    Route::get('/partDetails/{id}',[PartnerController::class,'show'])->name("partnerDetails");
    Route::get('/acceptPartner/{id}',[PartnerController::class,'update'])->name("acceptPartner");
    Route::get('/deletePartner/{id}',[PartnerController::class,'destroy'])->name("deletePartner");
    // partner section ends


    // sponsor section starts
    Route::get('/backSponsor',[SponsorController::class,'create'])->name('backSponsor');
    Route::post('/sponsorBackStore',[SponsorController::class,'backstore'])->name('sponsorBackStore');
    Route::get('/sponsorRequest',[SponsorController::class,'sponsorRequest'])->name('sponsorRequest');
    Route::get('/sponsorDetails/{id}',[SponsorController::class,'show'])->name('sponsorDetails');
    Route::get('/acceptSponsor/{id}',[SponsorController::class,'update'])->name('acceptSponsor');
    Route::get('/deleteSponsor/{id}',[SponsorController::class,'destroy'])->name('deleteSponsor');
    // sponsor section ends
    
    
    // contribution section starts
    // contribution section ends
    
    
    
    // signup section starts
    Route::get('/signedUpList',[SignedUp::class,'index'])->name('signedUpList');
    // signup section ends
    
    
    // staff section starts
    Route::get('/addStaff',[Navz::class,'addStaff'])->name('addStaff');
    Route::post('/addStaff',[Manage::class,'addStaff'])->name('insertStaff');
    Route::get('/staffList',[Navz::class,'staffList'])->name('staffList');
    // staff section ends


    // insights section starts
    // insights section ends


    // ============================ backend ends ============================
    
});











