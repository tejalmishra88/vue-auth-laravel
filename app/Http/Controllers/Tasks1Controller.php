<?php

namespace App\Http\Controllers;
use app\tasks1;
use Illuminate\Http\Request;

class Tasks1Controller extends Controller
{
    //
    public function getnames() 
    { 
       return task::all();
    
    }
}
