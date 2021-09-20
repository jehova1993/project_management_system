<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;
use App\Models\projects;
use App\Models\time_entry;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if($request->ajax())
        {
            $query=$request->search;
            $output="";
            $project=projects::where('project_name','LIKE','%'.$query."%")
                     ->where('status','=','active')
                     ->get();
            $task=tasks::all();
            $data=time_entry::all();
            $no=1;
            if(count($project)>0)
                {
                    foreach ($project as $details) {
                        $output.='<tr>'.
                        '<td>'.$no++.'</td>'.
                        '<th>'.$details->project_name.'</th>';
                        $project_hours=0;
                         foreach ($data as $row){
                            if($details->project_ID ==$row->project_ID){
                                $project_hours=$project_hours+$row->Hours;
                            }

                        }
                    $output=$output.'<td>'.$project_hours.'</td>'.'</tr>';
                    foreach($task as $tasks){
                        if($details->project_ID ==$tasks->project_ID){
                            $output=$output.'<tr>'.'<td></td><td>'.$tasks->task_name.'</td>';
                            $hours=0;
                            foreach($data as $row){
                                if($tasks->task_ID ==$row->task_ID){
                                    $hours=$hours+$row->Hours;

                                }

                             }
                    $output=$output.'<td>'.$hours.'</td>'.'</tr>';

                        }
                    }
            
                }
            return Response($output);
        }
    }

 }
}
