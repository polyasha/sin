<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Category;

use App\Http\Requests;

class ArticleController extends Controller
{
    //
    public function get(){
        $id = request()->route("id");
        if(is_null($id)){
          $articles = Article::all();
        return view('articles', ["articles"=>$category]);  
        }
        $article = Article::find($id);
        if(is_null($article)){
        return redirect(route("article.get"));
      }
      return view("article", ["article"=>$category]);
    }
    public function create(){
          $data = request()->all();
          $title = array_get($data, "title");
          $content = array_get($data, "content");
          $category_id = array_get($data, "category_id");
          $article = new Article();
          $category = Category::find($category_id);
          $article->category()->associate($category);
          $article->title = $title;
          $article->content = $content;
          $article->save();
          return redirect(route("category.get", ["id"=>$category_id]));
      }
        }

   
