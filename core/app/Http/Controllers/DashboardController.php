<?php

namespace App\Http\Controllers;

use App\Models\Offer;

class DashboardController extends AbstractAuthController
{
    public function index() {
        return view('dashboard.index')->with('offers', Offer::all());
    }
}
