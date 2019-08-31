<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ContractController extends Controller {
    public function index() {
        return view('admin/contracts/index');
    }
}