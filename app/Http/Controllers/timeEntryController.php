<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;
use App\Models\projects;
use App\Models\time_entry;

class timeEntryController extends Controller
{
    public function index()
    {
        $data=time_entry::join('projects','projects.project_ID','=','time_entries.project_ID')
              ->join('tasks','tasks.task_ID','=','time_entries.task_ID')
              ->get(['projects.project_name','tasks.task_name','time_entries.id','time_entries.Hours','time_entries.date','time_entries.description']);
        return view('/timeentry',compact('data'));
    }

    public function display()
    {
        $project=projects::where('status','=','active')->get();
        $task=tasks::all();
        $data=time_entry::all();
        return view('/reportpage',compact('data','project','task'));
    }
}
