<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ShowArticlesController extends Controller
{
    public function create (){

        $articles=Article::with("Categorie")->
        where("user_id",auth()->id())->latest()->get();
        return view("Articles.ShowArticles",compact('articles'));
    }
}
