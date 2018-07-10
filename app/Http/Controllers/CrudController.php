<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\crud;
class CrudController extends Controller
{
    //
    public function getnames() 
    { 
       return crud::all();
    
    }

}
