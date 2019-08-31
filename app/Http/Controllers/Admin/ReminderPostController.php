<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Reminder;
use App\Http\Requests\ReminderRequest;

class ReminderPostController extends Controller {
    public function new(ReminderRequest $objRequest) {
        Reminder::create($objRequest->all());

        return back();
    }

    public function edit(ReminderRequest $objRequest) {
        Reminder::findOrFail($objRequest->id)->update($objRequest->all());

        return redirect(route('admin.users.user', ['id' => $objRequest->user_id]));
    }
}