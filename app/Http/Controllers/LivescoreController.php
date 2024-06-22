<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivescoreController extends Controller
{
    /**
     * Get data of Widget
     */
    public function widget(){

        return view('widget');
    }
}
