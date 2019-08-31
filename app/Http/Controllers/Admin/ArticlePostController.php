<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticlePostController extends Controller {
    public function article(ArticleRequest $objRequest) {
        Article::create($objRequest->all());

        return redirect(route('admin.articles.home'));
    }

    public function article_edit(ArticleRequest $objRequest) {
        Article::findOrFail($objRequest->id)->update($objRequest->all());

        return redirect(route('admin.articles.home'));
    }
}