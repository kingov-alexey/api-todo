<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{

    //показать все
    public function index(){
        return Task::all();
    }

    //показать определенное
    public function show($id){
        return Task::find($id);
    }

    //создать задачу
    public function store(Request $request){
        return Task::create($request->all());
    }

    //обновить определенную задачу
    public function update(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->update($request->all());
        //dd($request->all());

        return $task;
    }

    //удалить определенную задачу
    public function delete(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->delete();

        return 204;
    }
}
