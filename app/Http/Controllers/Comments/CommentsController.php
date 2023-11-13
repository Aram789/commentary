<?php

namespace App\Http\Controllers\Comments;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::query()->where('children_id', '=', null)->get();

        return view('welcome', compact('comments'));
    }

    public function store(CommentRequest $request)
    {
        $validated = $request->validated();

        $comments = Comment::query()->create($validated);
        return redirect()->route('home.index', compact('comments'));

    }
}
