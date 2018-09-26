@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 col-offset-5">

    <form action="create/todo" method="post">
        {{ csrf_field() }} 
        <!-- token para pag pinasa yung post secure -->
        <input type="text" class="form-control" name="todo" placeholder="Create a new Todo">
        </form>
    </div>
</div>
    @foreach($todos as $todo)
              {{"ID: " . $todo->id . " - " . $todo->todo }} <!-- display --> 
             <a href="{{route('todo.delete' , ['id' => $todo->id])}}" class="btn btn-danger"> X </a> 
             <!-- todo.delete name of the path -->

             <a href="{{route('todo.update' , ['id' => $todo->id])}}" class="btn btn-success btn-xs"> Update </a> 
             <!-- todo.update name of the path -->
            
            @if(!$todo->completed) <!--1 or true data sa db -->
            <a href="{{route('todo.completed' , ['id' => $todo->id])}}" class="btn btn-xs btn-success"> Mark as completed </a>
            @else
            <span class="text-success">Completed!</span>

            @endif
            <hr>
              
    @endforeach

   
@stop