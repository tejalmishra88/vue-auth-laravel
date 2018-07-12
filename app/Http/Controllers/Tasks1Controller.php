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
public function delete(Request $request)  //delete
{  $y=$request->input('x');
   $task1= tasks1::where('id','=',$y)->delete();
   if($task1)    { return tasks1::all();   
}
 }
}
