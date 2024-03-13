@extends('app')
@section('content')
<h1>Category</h1>
<a href="{{route('category.create')}}" class="btn btn-success">Create Category</a>
<table>
    <th>id</th>
    <th>name</th>
    <th>Action</th>
    @foreach($categories as $key=>$value)
        <tr>
            <td>{{$value->id}}</td>
            <td>
             {{$value->category}}
            </td>
        </tr>
    @endforeach
</table>
{{$categories->links()}}
@endsection