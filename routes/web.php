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


Route::group(['middleware' => 'auth'], function(){

	Route::get('/', 'DashboardController@show')->name('home');

	Route::group(['prefix' => 'curriculum'], function(){
		Route::resource('qualifications', 'QualificationController');
	});

	//AJAX routes
	Route::post('/subscription/toggle/{qualification}', 'SubscriptionController@toggle');

});


//AMOlogin routes
Route::get('/login', function(){
	return redirect('/amoclient/redirect');
})->name('login');	

Route::get('/amoclient/ready', function(){
	return redirect()->route('home');
});

Route::get('/logout', function(){
	return redirect('/amoclient/logout');;
})->name('logout');
