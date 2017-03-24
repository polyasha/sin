<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    //
    public function get(){
        $id = request()->route("id");
        if(is_null($id)){
          $articles = Article::all();
        return view('articles', ["articles"=>$articles]);  
        }
        $article = Article::find($id);
        if(is_null($article)){
        return redirect(route("article.get"));
      }
      return view("article", ["article"=>$article]);
    }
    public function create(){
          $data = request()->all();
          $name = array_get($data, "name");
          if(is_null($name) ||strlen($name) ==0){
              return redirect(route("article.get"));
          }
          $article = new Article();
          $article->name = $name;
          $article->save();
          return redirect(route("article.get"));
      }
        }

   
