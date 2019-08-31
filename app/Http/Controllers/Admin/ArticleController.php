<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller {
    public function index() {
        $arrArticles = Article::orderBy('id', 'DESC')->paginate(20);

        return view('admin/articles/index')->with([
            'arrArticles' => $arrArticles
        ]);
    }

    public function new() {
        return view('admin/articles/new');
    }

    public function article($id) {
        $objArticle = Article::findOrFail($id);

        return view('admin/articles/article')->with([
            'objArticle' => $objArticle
        ]);
    }

    public function edit($id) {
        $objArticle = Article::findOrFail($id);

        return view('admin/articles/edit')->with([
            'objArticle' => $objArticle
        ]);
    }
}