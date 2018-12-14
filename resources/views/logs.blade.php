@extends('master')

@section('title','Logs')

@section('content')
<table><tr><th>ID</th><th>Task_ID</th><th>Status</th><th>Created At</th><th>Updated At</th></tr>
@foreach ($logs as $log)
<tr>
  <td>
    {{ $log->id }}
  </td><td>
    {{ $log->task_id }}
  </td><td>
    {{ $log->status }}
  </td><td>
    {{ $log->created_at }}
  </td><td>
    {{ $log->updated_at }}
  </td>
</tr>
@endforeach
</table>
<form action="{{ url('/') }}">
    <input type="submit" value="Back" />
</form>
@endsection
