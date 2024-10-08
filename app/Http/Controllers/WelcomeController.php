<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller {

    public function __invoke(Request $request) {

        // User::query()->create([
        //     'name' => 'Eduardo',
        //     'email' => 'eduardo@gmail.com',
        //     'password' => 'edu123',
        // ]);

        return view('welcome');
    }
}
