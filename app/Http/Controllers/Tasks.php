<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Tasks extends Controller
{
    public function ShowTasks() {

      echo '<table style="width:100%">
              <tr>
                <th>ID</th>
                <th>Task</th>
                <th>Count</th>
              </tr>';
      $tasks = DB::table('tasks')->get();
      foreach ($tasks as $task) {
        echo '<tr>';
        echo '<td>' . $task->id . '</td><td><a href="/tasks/' . $task->id . '">' . $task->name . '</a></td><td>' . $task->counter . '</td>';
        echo '</tr>';
      }
    echo '</table>;  
    }
}
