@extends('app')
@section('content')

<h1>Create Category</h1>
  <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
    @csrf()
    <div class="form-group">
       <input type="text" class="form-control" name="name"/>
    </div>
    <div class="form-group">
      <select name="categories[]" id="" multiple>
        @foreach($categories as $key=>$value)
           <option value="{{$value->id}}">{{$value->category}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <input type="file" name="files[]" multiple  id="">
    </div>
    <input type="submit" value="Create">
  </form>
@endsection