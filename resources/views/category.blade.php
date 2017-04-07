@extends('welcome')
@section('content')
<h4>{{$category->name}}</h4>

<ul>
    @foreach ($category->articles as $article)
    <li>{{$article->title}}</li>
    @endforeach
</ul>
<form class="category-form" method="POST" action='{{route("article.post")}}'class="form-horizontal">
    <div class="form-group">
        <label>Title</label> 
        <input type="text" name="title" class="form-control" placeholder="...">
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control" rows="3"></textarea>
        <input type="hidden" name="category_id" value="{{$category->id}}">
        <input type="hidden" name="token" value="{{csrf_token()}}">

        <button type="submit">Add article</button>
        <button type="reset">Cancel</button>
</form>
@stop
