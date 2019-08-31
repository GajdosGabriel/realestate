<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller {
    public function edit($id) {
        $objComment = Comment::findOrFail($id);

        return view('admin/comments/edit')->with([
            'objComment' => $objComment
        ]);
    }

    public function delete($id) {
        Comment::destroy($id);

        return back();
    }
}