<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create (){

        $categories=Categorie::all();
        return view('Articles.post',compact('categories'));
    }

// public function edit ($id){
//         $article= Article::findOrFail($id);
//         $categories=Categorie::all();
//         return view('Articles.edit',compact('categories',"article"));
//     }


    public function store (Request $request){

        $validated=$request->validate([
            "title"=>"required|max:255|string",
            'body' => 'required|max:1000|string',
            'categorie_id' => 'required|exists:categories,id',
            'iamge_path' => 'nullable|image|mimes:jpeg,png,jpg,gif'
        ]);
        if ($request->hasFile('iamge_path')) {
        $image = $request->file('iamge_path');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $imagePath = $image->storeAs('articles', $imageName, 'public');
        $validated['iamge_path'] = $imagePath;
    }

        $validated['user_id'] = auth()->id();

        $var2=Article::create($validated);

        return redirect()->route('post')->with('success', 'Article created successfully!');

    }

    public function destroy ($id){

        Article::find($id)->delete();
        return  redirect()->route('article.Show')->with('success', 'Article Delete successfully!');
    }





}
