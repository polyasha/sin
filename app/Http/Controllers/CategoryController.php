<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class CategoryController extends Controller
{
    //
    public function get(){
        $categories = Category::all();
        return view('categories', ["categories"=>$categories]);
        
      }
}
