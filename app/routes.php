<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Auth
Route::filter('loginAuth',function(){
	if(Session::get('login')==true){
		return Redirect::to('/blast');
	}
});
Route::filter('userAuth',function(){
	if(Session::get('login')==false){
		return Redirect::to('/');
	}
});
Route::get('/', array('before'=>'loginAuth','uses'=>'loginController@index'));
Route::post('/login', 'loginController@get_login');

Route::group(array('prefix'=>'/blast','before'=>'userAuth'),function(){
	Route::get('/','dashboardController@index');
	Route::get('/create','editTemplateController@index');
	Route::post('/template/edit','editTemplateController@index');
	Route::post('/template/submit','editTemplateController@submit_template');
	Route::post('/template/save','editTemplateController@save_template');
	Route::get('/receiver/choose','receiverController@index');
	Route::post('/email/send','sendController@do_send');

});
Route::get('/tes',"editTemplateController@tes_template");
Route::get('/autocomplete/receiver',"receiverController@autocomplete");
Route::post('/json/mailtemplate',"receiverController@json_mail_template");