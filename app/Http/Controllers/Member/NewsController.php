<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Article;

class NewsController extends Controller {
    public function article($id) {
        $objArticle = Article::findOrFail($id);

        return view('member/article')->with('objArticle', $objArticle);
    }
}