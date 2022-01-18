<?php

namespace App\Http\Controllers;
use App\Http\Requests\TaskRequest;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::orderBy('id', 'desc')->get();

        return view('task.index', compact('task'));
    }

    public function store(TaskRequest $request)
    {

        $data = ['task' => $request->task, 'mark'=> rand(0,1)];
        // $insert = Task::insert($data); //ini akan return true or false
        $insert = Task::create($data); //ini akan return data inputannya tapi nanti di modelnya harus ditambahin variable protected $guarded = [];

        return back(); //redirect->back() atau redirect('kesini lagi')
    }

    public function edit($id)
    {
        // $task = Task::where('id', $id)->first();
        $task = Task::find($id); //ini khusus untuk id
        return view('task.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        // Task::where('id',$id)->update(['task' => $request->task]);
        Task::find($id)->update(['task' => $request->task, 'mark'=> rand(0,1)]);
        return redirect('/task');
    }

    public function destroy($id)
    {
        // $data = DB::table('task')->where('id', $id)->delete();
        $data = Task::find($id)->delete();
        // $data->delete();
        return redirect('/task');
    }
}