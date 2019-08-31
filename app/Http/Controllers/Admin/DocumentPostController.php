<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Storage;
use App\UserDocument;
use App\Http\Requests\DocumentUploadRequest;

class DocumentPostController extends Controller {
    public function upload(DocumentUploadRequest $objRequest) {
        $strCreatedAt = date('Y-m-d H:i:s');
        $strFileName = $strCreatedAt . '_' . $objRequest->type . '.' . $objRequest->file('file')->extension();

        UserDocument::create([
            'user_id' => $objRequest->user_id,
            'document_id' => $objRequest->type,
            'filename' => $strFileName,
            'created_at' => $strCreatedAt,
        ]);

        Storage::disk('local')->putFileAs(
            'public/users/' . $objRequest->user_id . '/documents',
            $objRequest->file('file'),
            $strFileName);

        return back();
    }
}