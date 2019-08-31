<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Lead;

class LeadsController extends Controller {
    public function index() {
        $arrLeads = Lead::where('list', 'db')
            ->orderBy('priority', 'ASC')
            ->orderBy('id', 'DESC');
        if (isset($_GET['search'])) $arrLeads->search($_GET['search']);
        $arrLeads = $arrLeads->paginate(50);

        return view('agent/leads/index')->with([
            'arrLeads' => $arrLeads
        ]);
    }

    public function hot() {
        $arrLeads = Lead::where('list', 'hot')
            ->orderBy('priority', 'ASC')
            ->orderBy('id', 'DESC');
        if (isset($_GET['search'])) $arrLeads->search($_GET['search']);
        $arrLeads = $arrLeads->paginate(50);

        return view('agent/leads/hot')->with([
            'arrLeads' => $arrLeads
        ]);
    }

    public function move_hot($id) {
        Lead::findOrFail($id)->update(['list' => 'hot']);

        return back();
    }

    public function move_down($id) {
        Lead::findOrFail($id)->update(['priority' => Lead::max('priority') + 1]);

        return back();
    }

    public function delete($id) {
        Lead::findOrFail($id)->update(['list' => 'deleted']);

        return back();
    }
}