<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'projects.index');

Route::view('/projects/{project}', 'projects.show')->name('projects.show');


