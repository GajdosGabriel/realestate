<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Article;

class ArticlePostController extends Controller {
    public function article(ArticleRequest $objRequest) {
        Article::create($objRequest->all());

        return redirect(route('marketing.articles.home'));
    }

    public function edit(ArticleRequest $objRequest) {
        Article::findOrFail($objRequest->id)->update($objRequest->all());

        return redirect(route('marketing.articles.home'));
    }
}
