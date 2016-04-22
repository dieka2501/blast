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
	Route::post('/email/preview','previewController@index');
	Route::get('/receiver/list','listReceiverController@index');
	Route::get('/receiver/create','listReceiverController@create');
	Route::post('/receiver/create','listReceiverController@do_create');
	Route::post('/receiver/upload','excelController@do_upload');
	Route::get('/receiver/edit/{id}','listReceiverController@edit');
	Route::post('/receiver/edit','listReceiverController@do_edit');
	Route::get('/receiver/delete/{id}','listReceiverController@del');


});
Route::post('/api/receiver/create','apiController@add_receiver');
Route::post('/api/filter','apiController@get_filter_visitor');
Route::get('/tes/mandrill/info',"TestMandrillController@get_info");
Route::get('/tes',"editTemplateController@tes_template");
Route::get('/autocomplete/receiver',"receiverController@autocomplete");
Route::post('/json/mailtemplate',"receiverController@json_mail_template");