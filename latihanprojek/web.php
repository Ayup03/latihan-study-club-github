<?php 
Route::get('/', function () {
    return view("welcome");
});

//latihan templeting
Route::get('/dasboard2', function () {
    return view('index');
});

?>