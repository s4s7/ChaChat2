<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Dependency Injection
    // クラス名を記述することで型宣言
    public function store(CommentRequest $request, Comment $comment, int $article)
    {
        $comment->fill($request->all());
        $comment->user_id = $request->user()->id;
        $comment->article_id = $request->article;
        $comment->save();
        return redirect()->route('articles.show', $article);
    }
}