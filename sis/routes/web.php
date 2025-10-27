<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{id}', function($id) {
    $query = DB::select('select text from test where id = '.$id)[0];
    return $query;
});