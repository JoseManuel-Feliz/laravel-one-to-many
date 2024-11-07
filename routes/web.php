<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/projects', [AdminProjectController::class, 'index'])->name('Admin.projects.index');
Route::get('/admin/projects/create', [AdminProjectController::class, 'create'])->name('Admin.projects.create');
Route::get('/admin/projects/edit{id}', [AdminProjectController::class, 'edit'])->name('Admin.projects.edit');
Route::get('/admin/projects/{id}', [AdminProjectController::class, 'show'])->name('Admin.projects.show');
Route::put('/admin/projects/{id}', [AdminProjectController::class, 'update'])->name('Admin.projects.update');
Route::post('/admin/projects', [AdminProjectController::class, 'store'])->name('Admin.projects.store');
Route::delete('/admin/projects/{id}', [AdminProjectController::class, 'destroy'])->name('Admin.projects.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');