@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 col-lg-offset-5">

    <form action="{{route('todo.save' , ['id' => $todo->id])}}" method="post">
        {{ csrf_field() }}
        <input type="text" class="form-control" name="todo" value="{{$todo->todo}} " placeholder="Create a new Todo">
        </form>
    </div>
</div>
 

   
@stop