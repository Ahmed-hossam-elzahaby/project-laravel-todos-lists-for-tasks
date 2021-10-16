@extends('layout')
    <h1 class="text-center">All tasks</h1>

<a href="{{url('add')}}"><button class="mr-2 btn btn-outline-success">Add task</button></a>
<a href="{{url('finsh')}}"><button class="btn btn-outline-info">check done tasks</button></a>

    @foreach($tasks as $task)
<hr class="w-75">
<h2 class="text-center" >Titel: {{$task->titel}}</h2>
<p class="text-center lead p-2">Desc: {{$task->description}}</p>
<p class="text-center lead p-2" >Status: {{$task->status}}</p>
<p class="text-center">time: {{$task->created_at}}</p>
<div class=" d-flex justify-content-center">
<a href="{{url('done',$task->id)}}"><button class="mr-2 btn btn-outline-info">Done</button></a>
<a href="{{url('edit',$task->id)}}"><button class="mr-2 btn btn-outline-warning">Edit</button></a>
<a href="{{url('delete',$task->id)}}"><button   onClick="return confirm('are you sure you want delete this task')"  class="btn btn-outline-danger">Delete</button></a>

</div>
<hr class="w-75">
    @endforeach
