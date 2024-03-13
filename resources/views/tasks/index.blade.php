@extends('app')
@section('content')
<h1>Tasks</h1>
<a href="{{route('task.create')}}" class="btn btn-success">Create Task</a>
<table>
    <th>id</th>
    <th>name</th>
    <th>Action</th>

</table>
@endsection