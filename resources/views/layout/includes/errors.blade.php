@if($errors->any())
<ul>
@foreach($errors->all() as $key=>$value)
    <li>{{$value}}</li>
@endforeach
</ul>
@endif