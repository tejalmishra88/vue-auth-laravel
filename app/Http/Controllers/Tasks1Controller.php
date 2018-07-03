<?php

namespace App\Http\Controllers;
use app\tasks1;
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
    $todo = todo::create($request->all());
    if($todo)
    {   
        $tasks =todo::all();
        return request()->json(200,$tasks);
      // return "tejal";
    }
}
}
