@extends('layout')



<h1 class='text-center' >Done tasks</h1>
<a href="{{url('remove')}}"><button  onClick="return confirm('are you sure you want delete all done tasks')"  class='btn btn-outline-danger'>Clear all done tasks</button> </a>

<a href="{{url('tasks')}}"><button class='btn btn-outline-primary'>Back</button> </a>

@foreach($tasks as $task)
<hr class='w-75'>

<h4 class='text-center'>titel: {{$task->titel}}</h4>
<p class='lead p-2  text-center'>desc: {{$task->description}}</p>
<p class='lead p-2 text-center' >status: {{$task->status}}</p>
<hr class='w-75'>

@endforeach
