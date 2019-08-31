<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Comment;
use App\Http\Requests\CommentRequest;

class CommentPostController extends Controller {
    public function add(CommentRequest $objRequest) {
        Comment::create($objRequest->all());

        return back();
    }

    public function edit(CommentRequest $objRequest) {
        $objComment = Comment::findOrFail($objRequest->id);
        $objComment->text = $objRequest->text;
        $objComment->note = $objRequest->note ?? 0;
        $objComment->save();

        return back();
    }
}