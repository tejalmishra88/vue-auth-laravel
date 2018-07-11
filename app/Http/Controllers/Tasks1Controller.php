<?php

namespace App\Http\Controllers;
use App\tasks1;
use Illuminate\Http\Request;

class Tasks1Controller extends Controller
{
    //
    public function getnames() 
    { 
       return tasks1::all();
    
    }

public function savenames(Request $request)
{ 
   
    {   $todo3 = tasks1::create($request->all());
        if($todo3) { return tasks1::all();   }
    }
}
}
