<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\UserDocument;
use Storage;
use Auth;
use App\Http\Requests\DocumentUploadRequest;
use Mail;
use App\Mail\DocumentUploadMail;

class DocumentPostController extends Controller {
    public function upload(DocumentUploadRequest $objRequest) {
        $strCreatedAt = date('Y-m-d H:i:s');
        $strFileName = $strCreatedAt . '_' . $objRequest->type . '.' . $objRequest->file('file')->extension();

        $objDocument = UserDocument::create([
            'user_id' => Auth::user()->id,
            'document_id' => $objRequest->type,
            'filename' => $strFileName,
            'created_at' => $strCreatedAt,
        ]);

        Storage::disk('local')->putFileAs(
            'public/users/' . Auth::user()->id . '/documents',
            $objRequest->file('file'),
            $strFileName);

        $objDocument = $objDocument->load('document');

        // Notification
        Mail::to('info@cee-realestate.com')->send(new DocumentUploadMail($objDocument));

        flash('Document successfully uploaded.')->success();

        return back();
    }
}