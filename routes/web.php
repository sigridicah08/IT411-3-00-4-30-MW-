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

Route::get('new-page', function () {

	$names= ["Sigrid", "Icah", "Miro"];

    return view('new_page', array('names'=>$names));
})->name('new-page');

Route::get('new-page1', function () {
    return view('new_page1');
})->name('new-page1');

Route::get('new-page2', function () {
    return view('new_page2');
})->name('new-page2');

Route::get('/shoutout/{text}', function ($text) {
    return view('shoutout', array('text' => $text));
})->name('shoutout');

Route::get('/foo', function (){
	return view('foo');
})->name('foo');

Route::get('/bar', function (){
	return view('foo');
})->name('bar');


Route::get('/shoutout/{text}', function ($text) {
	$colors = array(
			"red" => "for passion",
			"green" => "color of nature",
			"blue" => "it is color of the sky",
			"white" => "pureness",
			"black" => "being bold",
			"silver" => "authentic",
			"yellow" => "warmth"
	);
    return view('shoutout', 
    	array('text' => $text, 'colors' => $colors


    ));
})->name('shoutout');


Route::get('/basic-arithmetic/{operator?}/{n1?}/{n2?}', function($operator=null,$n1=null,$n2=null){
	

	return view('/basic-arithmetic',

					array(

							'n1' => $n1,
							'n2' => $n2,
							'operator' => $operator,

						 )
			  );


	
})->name('basic-arithmetic');

Route::get('/middleware/{age}', function ($age){
	return view('age', array('age'=>$age));
})->middleware('age');