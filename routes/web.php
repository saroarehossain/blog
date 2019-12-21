<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('teacher',function(){
	return view('teacher');	
});

Route::get('student',function(){
	return view('student');	
});