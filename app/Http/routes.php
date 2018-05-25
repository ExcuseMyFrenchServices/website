<?php
use Illuminate\Http\Request;
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
    return view('home');
});

Route::get('about', function(){
	return view('pages.about');
});

Route::get('join-us', function(){
	return view('pages.join-us');
});

Route::get('events', function(){
	return view('pages.events');
});

Route::get('services', function(Request $request){
	$url = $request->path();
	return view('pages.services')->with(compact('url'));
});

Route::get('hospitality-staff', function(Request $request){
	$url = $request->path();
	return view('pages.hospitality-staff')->with(compact('url'));
});

Route::get('bar-service', function(Request $request){
	$url = $request->path();
	return view('pages.bar-service')->with(compact('url'));
});

Route::get('coffee-service', function(Request $request){
	$url = $request->path();
	return view('pages.coffee')->with(compact('url'));
});

Route::get('event', function(Request $request){
	$url = $request->path();
	return view('pages.event')->with(compact('url'));
});

Route::post('send-quote','EmailSenderController@quote');
Route::post('apply','EmailSenderController@apply');
