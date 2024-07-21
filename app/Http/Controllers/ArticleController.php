<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function index()
    {
        $articles = Article::paginate(10);

        return view('articles', compact('articles'));
    }

    function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('articleshow', compact('article'));
    }

}
