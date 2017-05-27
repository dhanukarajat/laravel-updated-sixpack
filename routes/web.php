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
// Routing Homepage
Route::get('/', function () {
    return view('login');
});

// Getting the name from the user and routing to Dashboard
Route::get('/welcome', function () {
	session_start();
	$_SESSION["name"] =$_GET['name'];
	$n = $_GET['name'];
    DB::insert('insert into users (firstname) values (?)', [$_GET['name']]);
	
	/* Sending email */
	$data = array('name'=>$n);
   
      Mail::send('mail', $data, function($m) {
         $m->from('dhanukarajat42@gmail.com','Rajat');
		 $m->to('it@sixpackshortcuts.com', 'SixPack')->subject
            ('Laravel Testing - New User has been created Mail');
         
      });
	echo 'home';
	
});

Route::get('/home', function () {
	return view('home');
});
