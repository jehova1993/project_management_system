<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;

class projectController extends Controller
{
   public function index()
   {
       $projects=projects::all();
       return view('/manageproject')->with('projects',$projects);
    
   } 
}
