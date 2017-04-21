@extends('welcome')
@section('content')
<ul>
@foreach($categories as $category)
<li><a href="{{route("category.get", ["id"=>$category->id])}}">{{$category->name}}<a/></li>
            @endforeach
</ul>

<form method="POST">
    <div class ="from-group">
    <span>Category name</span>
    <input id="name" onkeyup="validInput()" type="text" name="name" placeholder="...">
    <input type="hidden" name="token" value="{{csrf_token()}}">
    <button type="submit" class="btn btn-default" disabled>Add category</button>
    <button type="reset" class="btn btn-default">Cancel</button>
</form>
</div>
@stop


