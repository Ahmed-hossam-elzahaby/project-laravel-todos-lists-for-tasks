<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class taskcontroller extends Controller
{
    public function getall(){

$tasks=task::where('status','=','not_done')->get();
return view('tasks.all',[
'tasks'=>$tasks

]);


    }
    public function done($id){

$task=task::findorfail($id);
$task->update([

'status'=>'done'

]);
return redirect(url('tasks'));
    }

public function addform()
{

return view('tasks.add');


}
public function add(Request $request){
$request->validate([

    "titel"=>'required|string|max:50',
    "description"=>'required|string|',
]);
task::create([

'titel'=>$request->titel,
'description'=>$request->description,

]);
return redirect(url('tasks'));

}
public function finish(){

$tasks=task::where('status','=','done')->get();
return view('tasks.finsh',[
'tasks'=>$tasks

]);


}


public function editform($id){

$task=task::findorfail($id);

return view('tasks.edit',[

'task'=>$task

]);




}

public function edit($id, Request $request ){


    $request->validate([

        "titel"=>'required|string|max:50',
        "description"=>'required|string',
        
        ]);
$task=task::findorfail($id);
$task->update([

'titel'=>$request->titel,
'description'=>$request->description,

]);
return redirect(url('tasks'));
}

public function delete($id){

$task=task::findorfail($id);
$task->delete();
return redirect(url('tasks'));
}
public function remove(){

$tasks=task::where('status','=','done');
$tasks->delete();
return redirect(url('finsh'));

}

}
