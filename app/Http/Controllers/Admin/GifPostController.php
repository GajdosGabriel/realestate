<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;

class GifPostController extends Controller {
    public function new(ImageRequest $objRequest) {
        $objRequest->file('file')->move(public_path("/uploads/gifs"), date('Y-m-d_H:i:s', time()) . '.jpg');

        return redirect(route('admin.gif.index'));
    }
}