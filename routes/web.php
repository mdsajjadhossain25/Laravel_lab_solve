<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Models\Employee;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

// add employee
Route::get('/add_employee', [EmployeeController::class, 'addEmployee'])->name('add_employee');
Route::post('/add_employee', [EmployeeController::class, 'saveEmployee'])->name('add_employee');

// added successfully
Route::get('/added_successfully/{id}', [EmployeeController::class, 'addedSuccess'])->name('added_successfully');

// delete
Route::get('/delete_employee/{id}', [EmployeeController::class, 'deleteEmployee'])->name('delete_employee');

// edit
Route::get('/edit_employee/{id}', [EmployeeController::class, 'editEmployee'])->name('edit_employee');
Route::post('/edit_employee/{id}', [EmployeeController::class, 'updatEmployee'])->name('edit_employee');

// updated
Route::get('/updated_successfully/{id}', [EmployeeController::class, 'updateSuccess'])->name('updated_successfully');


// view
Route::get('/view/{id}', [EmployeeController::class, 'view'])->name('view');
