<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia; // use Inertia class

class HomeController extends Controller{

    public function test1(){
        return Inertia::render('Test1');
    }

    public function test2(){
        return Inertia::render('Test2');

    }

}
