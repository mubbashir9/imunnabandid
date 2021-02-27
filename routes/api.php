<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('customers/{token}','CustomerApis@customer');
Route::get('single/customers/{on_ln}/{token}','CustomerApis@show');
Route::get('customers/in_manufacturing/{token}','CustomerApis@customerinmanufacturing');
Route::get('customers/in_manufacturing/{manudate}/{token}','CustomerApis@customerinmanufacturingdate');

Route::get('customers/qc_images/{token}','CustomerApis@qcimages');
Route::get('customers/qc_images/{qcimages}/{token}','CustomerApis@qcimagesdate');

Route::get('customers/mo_completed/{token}','CustomerApis@mocompleted');
Route::get('customers/mo_completed/{completedate}/{token}','CustomerApis@mocompleteddate');


Route::get('customers/in_manufacturing/status/{istatus}/{token}','CustomerApis@customerinmanufacturingstatus');


Route::get('customers/qc_images/status/{istatus}/{token}','CustomerApis@qcimagesstatus');


Route::get('customers/mo_completed/status/{istatus}/{token}','CustomerApis@mocompletedstatus');







Route::get('customers/in_manufacturing/status/{istatus}/date/{date}/{token}','CustomerApis@customerinmanufacturingstatusdate');
Route::get('customers/qc_images/status/{istatus}/date/{date}/{token}','CustomerApis@qcimagesstatusdate');
Route::get('customers/mo_completed/status/{istatus}/date/{date}/{token}','CustomerApis@mocompletedstatusdate');








Route::post('/manufacture/dashboard/uploadFile', 'CustomerApis@uploadFile');
Route::post('/manufacture/dashboard/completed', 'CustomerApis@completedApi');
Route::post('/manufacture/dashboard/uploadimage', 'CustomerApis@uploadimage');






