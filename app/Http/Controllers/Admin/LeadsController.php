<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lead;

class LeadsController extends Controller {
    public function hot() {
        $arrLeads = Lead::where('list', 'hot')->orderBy('priority', 'asc')->orderBy('id', 'desc')->paginate(50);

        return view('admin/leads/hot')->with([
            'arrLeads' => $arrLeads
        ]);
    }
}
