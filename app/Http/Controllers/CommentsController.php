<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Article $article)
    {
        $this->validate(request(), ['body' => 'required|min:2']);
        $article->AddComment(request('body'));
        return back();
    }
}
