<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function index()
    {
        $article = Article::all();

        return view('article.index', compact('article'));
    }

    public function detail(Article $article)
    {
        return view('article.detail', compact('article'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        Article::create(request(['name','description']));

        return redirect('/article');
    }

    public function edit(Article $article)
    {
        return view('article.update', compact('article'));
    }

    public function update(Article $article)
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'created_at' => 'required|date',
        ]);

        $article->name = request('name');
        $article->description = request('description');
        $article->created_at = Carbon::parse(request('created_at'));
        $article->save();
        return redirect('/article');
    }

    public function delete(Article $article)
    {
        $article->comments()->delete();
        $article->delete();
        return redirect('/article');
    }
}
