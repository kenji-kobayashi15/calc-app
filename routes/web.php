<?php

use Illuminate\Support\Facades\Route;
use livewire\volt\volt;


Route::get('/', function () {
    return view('welcome');
});

volt::route('/calcs/{val1}/{calc}/{val2}', 'calc');
