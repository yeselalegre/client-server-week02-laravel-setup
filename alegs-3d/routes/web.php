<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'studentName'   => 'Yesel Ann M. Alegre',
        'studentNumber' => '0124-1126',
        'course'        => 'BSIT',
        'section'       => '3D',
        'subject'       => 'ITST 302',
        'currentDate'   => '08-03-2026',
    ]);
});