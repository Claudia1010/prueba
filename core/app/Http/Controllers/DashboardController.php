<?php

namespace App\Http\Controllers;

class DashboardController extends AbstractAuthController
{
    public function index() {
        return view('dashboard.index');
    }
}
