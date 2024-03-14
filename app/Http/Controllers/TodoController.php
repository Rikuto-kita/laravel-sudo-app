<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class TodoController extends Controller
{
    public function index()
    {
        $todos = Task::orderBy('id')->get();
        return view('todo', ['todos' => $todos]);
    }

    public function store(Request $request)
    {
        $todo = new Task;
        $todo->name = $request->name;
        $todo->is_result = false;
        $todo->save();

        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $todo = Task::findOrFail($id);
        $todo->delete();

        return redirect()->route('index');
    }

    public function update(Request $request,$id)
    {
        $todo = Task::findOrFail($id);
        $todo->name = $request->name;
        $todo->is_result = empty($request->is_result) ? false : true;
        $todo->save();

        return redirect()->route('index');
    }
}


