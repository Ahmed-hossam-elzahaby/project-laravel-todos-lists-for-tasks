@extends('layout')


<h4 class="text-center">Add new task</h4>
@foreach($errors->all() as $ero)
<p class="text-center text-danger" >{{$ero}}</p>
@endforeach


<form action="{{url('add')}}" method="POST">
@csrf
<div class="d-flex justify-content-center">
<input type="text" name="titel" class="mt-4 w-50 form-control" placeholder="titel" >
</div>
<div class="d-flex justify-content-center">

<textarea name="description" class="mt-4 w-50 form-control " placeholder="description" ></textarea>
</div>
<div class="d-flex justify-content-center">

<button type="submit" class="mt-3 btn btn-outline-success">Add task</button>
</div>

</form>
