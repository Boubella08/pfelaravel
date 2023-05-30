<?php

use App\Http\Controllers\OrganismeController;
use App\Http\Controllers\ProjectController;
use App\Models\Organisme;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/







Route::get('/' , [OrganismeController::class , 'show']);
Route::get('addorg' , [OrganismeController::class , 'create']);
Route::post('addorganisme' , [OrganismeController::class , 'store'])->name('organisme.store');
Route::get('organisme/{id}/edit',[OrganismeController::class,'edit'])->name('organisme.edit');
Route::put('organisme/update/{id}' , [OrganismeController::class , 'update'])->name('organisme.update');
Route::get('/projects' , [ProjectController::class , 'show']);
Route::get('addprjt' , [ProjectController::class , 'create']);
Route::post('addprojects' , [ProjectController::class , 'store'])->name('project.store');
Route::get('project/{id}/edit' , [ProjectController::class , 'edit'])->name('project.edit');
Route::put('project/{id}/update'  , [ProjectController::class , 'update'])->name('project.update');





