<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Tasks extends Controller
{
    public function ShowTasks() {

      $tasks = DB::table('tasks')->get();
      foreach ($tasks as $task) {
        echo $task->id . ' | <a href="/tasks/' . $task->id . '">' . $task->name . '</a> | ' . $task->counter . '<br>';
      }

    }
}
