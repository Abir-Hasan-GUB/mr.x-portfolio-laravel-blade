<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;
//Route::get('/', function(){
//   return "<h1> Server connect successfully done!</h1>";
//});

//Page routes
Route::get('/', [HomeController::class, 'page']);
Route::get('/projects', [ProjectController::class, 'page']);
Route::get('/resume', [ResumeController::class, 'page']);
Route::get('/contact', [ContactController::class, 'page']);

//All GET request from DB
Route::get('/getAllContacts', [ContactController::class, 'getAllContacts']);
Route::get('/getAaboutDetails', [HomeController::class, 'getAaboutDetails']);
Route::get('/getEducationDetails', [ResumeController::class, 'getEducationDetails']);
Route::get('/getExperienceDetails', [ResumeController::class, 'getExperienceDetails']);
Route::get('/getHeroproperties', [HomeController::class, 'getHeroproperties']);
Route::get('/getLanguageDetails', [ResumeController::class, 'getLanguageDetails']);
Route::get('/getProfessionalSkill', [ResumeController::class, 'getProfessionalSkill']);
Route::get('/getAllProjectDetails', [ProjectController::class, 'getAllProjectDetails']);
Route::get('/getResumeLink', [ResumeController::class, 'getResumeLink']);
Route::get('/getSeoProperties', [HomeController::class, 'getSeoProperties']);
Route::get('/getSocialLinks', [HomeController::class, 'getSocialLinks']);

//All Post Request from DB
Route::post('/postAaboutDetails', [HomeController::class, 'postAaboutDetails']);
Route::post('/postAContact', [ContactController::class, 'postAContact']);
Route::post('/postEducationDetails', [ResumeController::class, 'postEducationDetails']);
Route::post('/postExperienceDetails', [ResumeController::class, 'postExperienceDetails']);
Route::post('/postHeroproperties', [HomeController::class, 'postHeroproperties']);
Route::post('/postLanguageDetails', [ResumeController::class, 'postLanguageDetails']);
Route::post('/postProfessionalSkill', [ResumeController::class, 'postProfessionalSkill']);
Route::post('/postSingleProjectDetails', [ProjectController::class, 'postSingleProjectDetails']);
Route::post('/postResumeLink', [ResumeController::class, 'postResumeLink']);
Route::post('/postSeoProperties', [HomeController::class, 'postSeoProperties']);
Route::post('/postSocialLinks', [HomeController::class, 'postSocialLinks']);

