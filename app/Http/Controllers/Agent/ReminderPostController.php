<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Reminder;
use App\Http\Requests\ReminderRequest;

class ReminderPostController extends Controller {
    public function new(ReminderRequest $objRequest) {
        $objExisting = Reminder::where([
            'agent_id' => $objRequest->agent_id,
            'datetime' => $objRequest->datetime
        ])->first();

        if ($objExisting) {
            flash('Agent already has a reminder for this time.')->error();

            return back()->withInput();
        }
        else Reminder::create($objRequest->all());

        return back();
    }

    public function edit(ReminderRequest $objRequest) {
        Reminder::findOrFail($objRequest->id)->update($objRequest->all());

        return redirect(route('agent.users.user', ['id' => $objRequest->user_id]));
    }
}