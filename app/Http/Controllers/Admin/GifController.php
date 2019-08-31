<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GifController extends Controller {
    public function index() {
        $arrGifs = array_reverse(Storage::disk('uploads')->allFiles('gifs'));

        return view('admin/gif/index')->with([
            'arrGifs' => $arrGifs
        ]);
    }

    public function new() {
        return view('admin/gif/new');
    }
}