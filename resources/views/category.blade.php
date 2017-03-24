<h4>{{$category->name}}</h4>
<ul>
    @foreach ($category->articles as $article)
    <li>{{$article->title}}</li>
    @endforeach
</ul>
<form method="POST">
    <span>Title</span> 
    <input type="text" name="name" placeholder="...">
    <input type="hidden" name="token" value="{{csrf_token()}}">
    <br/>
    <span>Content</span>
    <textarea name="Content" rows="3"></textarea>
    <input type="hidden" name="token" value="{{csrf_token()}}">
    <button type="submit">Add article</button>
    <button type="reset">Cancel</button>
</form>