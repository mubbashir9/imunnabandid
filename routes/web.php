<?php

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





Route::get('/foo', function () {
    Artisan::call('storage:link');
});
Route::get('/', function () {
    return view('encrypt');
});
Route::get('/Customer-info/{user_id}','Customerscontroller@Qrshow');
Route::post('/Customer-info/show-detail','Customerscontroller@Qrshowdetail');
Route::post('/store','Customerscontroller@create');
Route::get('/show/{parameter}','Customerscontroller@show');
Route::get('/faq','Customerscontroller@faq');
Route::get('/Terms-condition','Customerscontroller@termscondition');
Route::get('/customer-reset-pin/{id}','Customerscontroller@pinreset');
Route::post('/customer-pin/reset/','Customerscontroller@updatepin');

Route::get('/customer-record','Customerscontroller@linkurlsave');

//admin routes

Route::get('/dashboardss','Admincontroller@demo');
Route::get('/admin/dashboard/ApproveAll','Admincontroller@methodName')->middleware('checkrole');
Route::get('/admin/dashboard','Admincontroller@neworder')->middleware('checkrole');
Route::get('/admin/dashboard/order-link-reset/{id}','Admincontroller@resetlink')->middleware('checkrole');
Route::get('/admin/dashboard/menu-qc','Admincontroller@menuqc')->middleware('checkrole');
Route::get('/admin/dashboard/order-links','Admincontroller@orderlinks')->middleware('checkrole');
Route::get('/admin/dashboard/completed-order','Admincontroller@completedorders')->middleware('checkrole');
Route::get('/admin/dashboard/users','Admincontroller@users')->middleware('checkrole');
Route::get('/admin/dashboard/user/registration','Admincontroller@userform')->middleware('checkrole');
Route::get('/admin/dashboard/neworder','Admincontroller@neworder')->middleware('checkrole');
Route::get('/admin/dashboard/order/{order}','Admincontroller@orderdetail')->middleware('checkrole');

Route::post('/admin/dashboard/customer/update/{id}','Admincontroller@customeredit')->middleware('checkrole');
Route::post('/admin/dashboard/registration','Admincontroller@userregister')->middleware('checkrole');
// Route::get('/admin/dashboard/order/details','Admincontroller@showorderdetail')->middleware('checkrole');
Route::get('/admin/dashboard/rejected-list','Admincontroller@rejectedorderlist')->middleware('checkrole');
Route::get('/admin/dashboard/order-reject/{order}','Admincontroller@reject')->middleware('checkrole');
Route::get('/admin/dashboard/QC-approve/{id}','Admincontroller@QCapprove')->middleware('manufacture');
Route::get('/admin/dashboard/QC-reject/{id}','Admincontroller@QCreject')->middleware('manufacture');
Route::post('/admin/logout','Admincontroller@logout')->middleware('manufacture');


Route::get('/admin/login','Admincontroller@show');
Route::post('/admin/login/check','Admincontroller@login');
Route::get('/admin/status/{order}','Admincontroller@approve');
Route::get('/admin/delete-manufacture/{id}','Admincontroller@delete');
Route::get('/admin/status/rejected-approve/{order}','Admincontroller@rejectedorderApprove');



//manufacture routes
Route::post('/logout','Manufacturecontroller@logout')->middleware('manufacture');
Route::get('/manufacture/dashboard/manufacturing/{id}','Manufacturecontroller@manufacturingstatus')->middleware('manufacture');
// Route::get('/manufacture/dashboard/qcimage/{id}','Manufacturecontroller@qcimage')->middleware('manufacture');
Route::get('/manufacture/dashboard/qcimage/{id}','Manufacturecontroller@qcimage')->middleware('manufacture');
Route::get('/manufacture/dashboard/completed/{id}','Manufacturecontroller@completed')->middleware('manufacture');
// Route::get('/manufacture/login','Manufacturecontroller@show');
Route::get('/manufacture/login','Manufacturecontroller@show');
Route::post('/manufacture/login/check','Manufacturecontroller@login');
Route::get('/manufacture/dashboard','Manufacturecontroller@showdashboard')->middleware('manufacture');
Route::post('/manufacture/dashboard/upload-qcimage','Manufacturecontroller@uploadimage')->middleware('manufacture');
Route::get('/manufacture/dashboard/neworder','Manufacturecontroller@neworder')->middleware('manufacture');
Route::get('/manufacture/dashboard/shipping-form/{id}','Manufacturecontroller@shippingform')->middleware('manufacture');
Route::post('manufacturer/store/shipping-detail','Manufacturecontroller@shippingsuccess')->middleware('manufacture');

Route::get('/manufacture/dashboard/completed-order','Manufacturecontroller@completedorders')->middleware('manufacture');




Route::get('/manufacture/dashboard/upload-csv','Manufacturecontroller@uploadCSV')->middleware('manufacture');
Route::post('/manufacture/dashboard/uploadFile', 'Manufacturecontroller@uploadFile')->middleware('manufacture');
// Route::post('/manufacture/dashboard/completed', 'Manufacturecontroller@completedApi')->middleware('manufacture');
// Route::post('/manufacture/dashboard/completed', 'Manufacturecontroller@completedApi')->middleware('manufacture');