<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class Tasks extends Controller
{
    public function ShowTasks() {
      $tasks = DB::table('tasks')->get();
      return view('tasks')->with(compact('tasks'));
    }

    public function AddTask($id) {
      DB::table('tasks')->where('id', $id)->increment('counter');
      $task_name = (DB::table('tasks')->where('id', $id)->first())->name;
      DB::table('logs')->insert(
        ['task_id' => $task_name, 'status' => 'Не обработано']
      );
      return redirect()->route('root');
    }

    public function TasksLog() {
      $logs = DB::table('logs')->get();
      return view('logs')->with(compact('logs'));
    }

    public function TaskProceed() {
      $task = DB::table('logs')->where('status', 'Не обработано')->first();
      if(!is_null($task)) {
        DB::table('logs')->where('id', $task->id)->update(['status' => 'Обработано', 'updated_at' => Carbon::now()->toDateTimeString() ]);
      }
      return redirect()->route('root');
    }

}
