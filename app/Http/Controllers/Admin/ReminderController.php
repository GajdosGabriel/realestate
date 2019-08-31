<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Reminder;
use App\User;

class ReminderController extends Controller {
    public function index() {
        $arrAgents = User::role('agent')
            ->where('id', '!=', 1)
            ->orderBy('name')
            ->get();

        // Missed
        $arrMissed = Reminder::where('datetime', '<', date('Y-m-d 00:00:00'))
            ->where('done', 0)
            ->orderBy('datetime')
            ->with(['user', 'agent']);
        if (isset($_GET['filter'])) $arrMissed->where('agent_id', $_GET['filter']);
        $arrMissed = $arrMissed->get();

        // Today
        $arrToday = Reminder::where('datetime', 'LIKE', date('Y-m-d') . '%')
            ->where('done', 0)
            ->orderBy('datetime')
            ->with(['user', 'agent']);
        if (isset($_GET['filter'])) $arrToday->where('agent_id', $_GET['filter']);
        $arrToday = $arrToday->get();

        // Future
        $arrFuture = Reminder::where('datetime', '>', date('Y-m-d 23:59:59'))
            ->where('done', 0)
            ->orderBy('datetime')
            ->with(['user', 'agent']);
        if (isset($_GET['filter'])) $arrFuture->where('agent_id', $_GET['filter']);
        $arrFuture = $arrFuture->get();

        return view('admin/reminders/index')->with([
            'arrAgents' => $arrAgents,
            'arrMissed' => $arrMissed,
            'arrToday' => $arrToday,
            'arrFuture' => $arrFuture
        ]);
    }

    public function edit($id) {
        $objReminder = Reminder::findOrFail($id);
        $arrAgents = User::role('agent')
            ->where('id', '!=', 1)
            ->get();

        return view('admin/reminders/edit')->with([
            'objReminder' => $objReminder,
            'arrAgents' => $arrAgents
        ]);
    }

    public function done($id) {
        Reminder::find($id)->update(['done' => 1]);

        return back();
    }

    public function delete($id) {
        Reminder::destroy($id);

        return back();
    }
}