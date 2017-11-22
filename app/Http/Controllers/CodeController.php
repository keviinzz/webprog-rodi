<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CodeController extends Controller
{
    public function codePage(){
        return view('code');
    }

    public function browsePage(){
        return view('browse');
    }
}
