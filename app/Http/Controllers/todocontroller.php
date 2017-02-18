<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class todoController extends Controller
{
 public function tod()
  {
      return view("todo");
  }
  public function save(Request $request)
  {
      $todo = new Todo;
      $todo ->task = $request->todo;
      $todo ->description = $request->description;
      $todo ->save();
      echo "data saved...";
  }

  public function view()
  {
       $newtodo = new Todo;
       $newtodos = $newtodo->all();
       return view('show',['todos'=>$newtodos]);
  }
  public function delete($id)
  {
      $todo = Todo::find($id);
      $todo->delete();
      return back();
  }
  public function edit($id)
  {
      $todo=Todo::find($id);
      return view('edit',['todos'=>$todo]);
  }
  public function update(Request $request)
  {
      $todo=Todo::find($request->id);
      $todo->task=$request->task;
      $todo->description=$request->description;
      $todo->save();
      return Redirect('/show');
  }
}
