@extends('layout')


<h2 class="text-center">task is {{$task->titel}}  </h2>

<form action="{{url('edit',$task->id)}}" method="POST">
@csrf
<div class="d-flex justify-content-center">
<input type="text" value="{{$task->titel}}" name="titel" class="mt-4 w-50 form-control" placeholder="titel" >
</div>
<div class="d-flex justify-content-center">

<textarea name="description" class="mt-4 w-50 form-control " placeholder="description" >
    {{$task->description}}
</textarea>
</div>
<div class="d-flex justify-content-center">

<button type="submit" class="mt-3 btn btn-outline-success">edit task</button>
</div>

</form>
