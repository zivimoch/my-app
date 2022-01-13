<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        $data = ['task' => $request->task];
        $insert = DB::table('task')->insert($data);

        return back(); //redirect->back() atau redirect('kesini lagi')
    }

    public function edit($id)
    {
        $task = DB::table('task')->where('id', $id)->first();
        return view('task.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        DB::table('task')->where('id',$id)->update(['task' => $request->task]);
        return redirect('/task');
    }

    public function destroy($id)
    {
        // $data = DB::table('task')->where('id', $id)->delete();
        $data = Task::table('task')->where('id', $id)->delete();
        // $data->delete();
        return redirect('/task');
    }
}