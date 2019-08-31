<?php

namespace App\Http\Controllers;

class CertificationController extends Controller {
    public function index() {
        return view('public/certification/index');
    }

    public function hnwi() {
        return view('public/certification/hnwi');
    }

    public function si() {
        return view('public/certification/si');
    }

    public function ri() {
        return view('public/certification/ri');
    }
}