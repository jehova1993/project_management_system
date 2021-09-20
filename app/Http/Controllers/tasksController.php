<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;
use App\Models\projects;

class tasksController extends Controller
{
   public function index()
   {
       $data=tasks::join('projects','projects.project_ID','=','tasks.project_ID')
             ->get(['projects.project_name','tasks.task_ID','tasks.task_name','tasks.status']);
       return view('/managetask',compact('data'));
   }
}
