<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
    
});

// Route::get('/', [EmployeeController::class, 'showEmployees']);
// Route::get('/employee/pdf',[EmployeeController::class, 'createFDF']);
//Route::get('/', [UserController::class, 'generatePDFshow']);
//Route:: get('/generate-pdf' ,[UserController::class, 'generatePDF']);

//Route::get('/',[UserController::class, 'userInformation']);
