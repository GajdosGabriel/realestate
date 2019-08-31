<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller {
    public function edit($id) {
        $objComment = Comment::findOrFail($id);

        return view('agent/comments/edit')->with([
            'objComment' => $objComment
        ]);
    }

    public function delete($id) {
        Comment::destroy($id);

        return back();
    }
}