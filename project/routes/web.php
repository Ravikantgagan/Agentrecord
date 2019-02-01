<?php

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


		// Auth::routes();

	// Route::get('/home', 'HomeController@index')->name('home');

								
						/*Admin Route
		#############################################################################
*/

     //Route::get('admin-dashboard',['as'=>'admin-dashboard','uses'=>'Admin\ADashboardController@index']);

     Route::get('ADshboard',['as'=>'ADshboard','uses'=>'Admin\ADashboardController@index']);
	 
	 Route::get('admin/login','Admin\LoginController@showLoginForm');

	 Route::post('admin.login','Admin\LoginController@login');

     Route::get('admin/register','Admin\RegisterController@registerForm')->name('admin.register');

     Route::post('admin/register','Admin\RegisterController@create');
	 

	 Route::post('admin-password/email','ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

	 Route::get('admin-password/reset','ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

	  //Reset Password

	  Route::get('admin-password/reset{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

	  Route::post('admin-password/reset','Admin\ResetPasswordController@reset');



	//Route::get('admin-userdata','Admin\ADashboardController@getAgentData');

	// Agent Registration delete view show edit

	Route::get('/agent/add','Admin\ADashboardController@regAgentForm');

	Route::post('/agent/store','Admin\ADashboardController@storeAgent');


	Route::get('agentshow',['as'=>'agentshow','uses'=>'Admin\ADashboardController@showAgent']);

	Route::get('agent/view-profile/{id}','Admin\ADashboardController@viewAgent');

	Route::get('agent/edit-profile/{id}',['as'=>'agent.edit-profile','uses'=>'Admin\ADashboardController@editAgent']);

	Route::post('agent/update-profile/{id}',['as'=>'agent.update-profile','uses'=>'Admin\ADashboardController@updateAgent']);

	Route::get('agent/delete-profile/{id}',['as'=>'agent.delete-profile','uses'=>'Admin\ADashboardController@destroyAgent']);



	// user balancesheet

	Route::get('/user/register','Admin\ADashboardController@reguserForm');

	Route::post('/user/store','Admin\ADashboardController@storeUser');
	Route::get('showuser',['as'=>'showuser','uses'=>'Admin\ADashboardController@showUser']);
	Route::get('user/view-profile/{id}','Admin\ADashboardController@viewuser');
	Route::get('user/edit-profile/{id}',['as'=>'user.edit-profile','uses'=>'Admin\ADashboardController@editUser']);
	Route::post('user/update-profile/{id}',['as'=>'user.update-profile','uses'=>'Admin\ADashboardController@updateUser']);

	Route::get('user/delete-profile/{id}',['as'=>'user.delete-profile','uses'=>'Admin\ADashboardController@destroyUser']);






	





	



Route::get('validation','JsFormValidationController@jsformvalidation');
Route::get('newreg','JsFormValidationController@newreg');


