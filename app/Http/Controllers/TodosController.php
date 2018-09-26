<?php

namespace App\Http\Controllers;
use App\Todo; //use model
use Session; //use session
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //create public function
    public function index(){ // get all the data in the data base
        $todos = Todo::all(); // call method get all the todos of our database
        return view('todos')->with('todos', $todos);
    }

    public function store(Request $request){ //insert record in database hindi palabas
       // dd($request->all()); //die and dump
        $todo = new Todo; // create 
        $todo->todo = $request->todo; //requesting values of todo
        $todo->save(); //save
        Session::flash('success', 'Your todo was created.'); //key yung success sa loob nun yung your todo was created.
        return redirect()->back();
    }

    public function delete($id){ //deleting function
        $todo = Todo::find($id);
        $todo->delete();
        Session::flash('success', 'Your todo was deleted.'); //key yung success
        return redirect()->back();
    }

    public function update($id){ //updating function
        $todo = Todo::find($id);
        return view('update')->with('todo', $todo); // view is called update
    }

    public function save(Request $request, $id){ //updating function
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();
        Session::flash('success', 'Your todo updated.'); //key yung success
        return redirect()->route('todos'); //specific redirection
    }

    public function completed($id){ //updating function
        $todo = Todo::find($id);
        $todo->completed = 1; //straight to the point completed na agad
        $todo->save();
        Session::flash('success', 'Your todo was marked as completed.'); //key yung success
        return redirect()->back(); //specific redirection
    }













}
