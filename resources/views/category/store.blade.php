@extends('app')
@section('content')
<h1>Create Category</h1>
  <form action="{{route('category.store')}}" method="post">
    @csrf()
    <div class="form-group">
       <input type="text" class="form-control" name="name"/>
    </div>
    <input type="submit" value="Create">
  </form>
@endsection