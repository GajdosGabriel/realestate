<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Storage;
use App\UserDocument;

class DocumentController extends Controller {
    public function download($id) {
        $objDocument = UserDocument::findOrFail($id);

        return Storage::disk('local')
            ->download('public/users/' . $objDocument->user_id . '/documents/' . $objDocument->filename);
    }

    public function confirm($id) {
        UserDocument::findOrFail($id)->update(['confirmed' => 1]);

        return back();
    }
}