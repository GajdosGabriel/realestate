<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller {
    public function index() {
        $arrArticles = Article::orderBy('id', 'desc')->paginate(20);

        return view('marketing/articles/index')->with([
            'arrArticles' => $arrArticles
        ]);
    }

    public function new() {
        return view('marketing/articles/new');
    }

    public function article($id) {
        $objArticle = Article::findOrFail($id);

        return view('marketing/articles/article')->with([
            'objArticle' => $objArticle
        ]);
    }

    public function edit($id) {
        $objArticle = Article::findOrFail($id);

        return view('marketing/articles/edit')->with([
            'objArticle' => $objArticle
        ]);
    }
}