<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodolistFormController extends Controller
{
    public function index() {
      $todos = Todo::orderBy('id', 'asc')->get();

      $estimate_hour_sum = 0;
      foreach($todos as $todo) {
        $estimate_hour_sum += $todo->estimate_hour;
      }

      return view('todo_list', [
        'todos' => $todos,
        'estimate_hour_sum' => $estimate_hour_sum
      ]);
    }

    public function createPage() {
      return view('todo_create');
    }

    public function create(Request $request) {

      $validator = $request->validate([
        'task_name' => 'required',
        'task_discription' => 'required',
        'assign_person_name' => 'required',
        'estimate_hour' => 'required'
      ]);

      $todo = new Todo();
      $todo->task_name = $request->task_name;
      $todo->task_discription = $request->task_discription;
      $todo->assign_person_name = $request->assign_person_name;
      $todo->estimate_hour = $request->estimate_hour;
      $todo->save();

      return redirect('/');
    }

    public function editPage($id) {
      $todo = Todo::find($id);
      return view('todo_edit', [
          "todo" => $todo
      ]);
    }

    public function edit(Request $request) {
      Todo::find($request->id)->update([
        'task_name' => $request->task_name,
        'task_discription' => $request->task_discription,
        'assign_person_name' => $request->assign_person_name,
        'estimate_hour' => $request->estimate_hour
      ]);
      return redirect('/');
    }

    public function deletePage($id) {
      $todo = Todo::find($id);
      return view('todo_delete', [
        "todo" => $todo
      ]);
    }

    public function delete($id) {
      $todo = Todo::findOrFail($id);
      $todo->delete();
      return redirect('/');
    }
}
