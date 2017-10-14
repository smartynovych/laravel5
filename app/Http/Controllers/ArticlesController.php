<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {
        $article = Article::all();

        return view('article.index', compact('article'));
    }

    public function detail(Article $article) {
        return view('article.detail', compact('article'));
    }

    public function create() {
        return view('article.create');
    }

    public function store() {
        Article::create(request(['name','description']));

        return redirect('/article');
    }
}
