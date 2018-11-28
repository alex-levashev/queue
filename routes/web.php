<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Tasks@ShowTasks');

Route::get('/tasks/{id}', function ($id) {
  $count = DB::table('tasks')->where('id', $id)->value('counter');
  $count += intval($count);
  DB::table('tasks')
   ->where('id',$id)
   ->update(['counter' => strval($count)]);
   $count1 = DB::table('tasks')->where('id', $id)->value('counter');
   echo $count1;
});
