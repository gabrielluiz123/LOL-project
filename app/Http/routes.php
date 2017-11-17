<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'donoController@getSair');



Route::get('/', function(){
	return view('index');
});
set_time_limit(0);
        ini_set('memory_limit', '-1');
Route::get('/champion2', 'championsController@create');

Route::get('/relatorio_por', 'relatoriosController@relatorio_porcentagem');

Route::get('/contato', function(){
	return view('contato');
});

Route::get('/sobre', function(){
	return view('sobre');
});
	    

				Route::get('/adm_panel', 'gamesController@create');
	Route::group(['prefix' => '', 'middleware' => 'auth'], function(){
								Route::get('/game','gamesController@create');
								Route::post('/game_store','gamesController@store');

								Route::get('/spell', 'spellController@create');	
								Route::post('/spell_store', 'spellController@store');
								Route::get('/spell_edit','spellController@edit');
								Route::post('/spell_update', 'spellController@update');
								Route::get('/spell_delete', 'spellController@destroy');

								Route::get('/champion', 'championController@create');
								Route::post('/champion_store', 'championController@store');
								Route::get('/champion_edit', 'championController@edit');
								Route::post('/champion_update', 'championController@update');
	});		
