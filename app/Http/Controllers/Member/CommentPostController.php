<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Comment;
use App\Http\Requests\CommentRequest;

class CommentPostController extends Controller {
    public function add(CommentRequest $objRequest) {
        Comment::create($objRequest->all());

        return back();
    }
}
