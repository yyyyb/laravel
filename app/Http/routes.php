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

//Route::any('member/info','MemberController@info');

Route::any('member/test',"MemberController@test");

Route::any('member/query',"MemberController@query");


Route::get('member/{id}',[
    'uses' => 'MemberController@info'
])->where('id','[0-9]+');

Route::get('/', function () {
    return view('welcome');
});

Route::get('basic',function (){
   return 'hellow world';
});

Route::post('basic2',function (){
    return 'basic2';
});

Route::match(['get','post'],'mat',function (){
   return 'mat';
});

Route::any('an',function (){
    return 'an';
});



Route::auth();

Route::get('/home', 'HomeController@index');
Route::any('upload', 'StudentController@upload');
