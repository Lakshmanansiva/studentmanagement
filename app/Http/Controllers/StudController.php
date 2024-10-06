<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudController extends Controller
{
    public function aboutus(){
        if (false){
            return redirect()->route('siva');
        }
        return " hii";
    }
}
