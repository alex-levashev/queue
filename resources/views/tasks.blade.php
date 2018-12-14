@extends('master')

@section('title','Tasks')

@section('content')
<table class='table'><tr><th>ID</th><th>Task</th><th>Count</th></tr>
  @foreach($tasks as $task)
  <tr><td>
      {{ $task->id }}
    </td><td>
      <a href="/tasks/{{ $task->id }}">{{ @$task->name }}</a>
    </td><td>
      {{ @$task->counter }}
    </td></tr>
  @endforeach
</table>
<form action="{{ url('/queue/') }}">
    <input type="submit" value="Queue" />
</form>
<form action="{{ url('/proceed/') }}">
    <input type="submit" value="Proceed" />
</form>
@endsection
