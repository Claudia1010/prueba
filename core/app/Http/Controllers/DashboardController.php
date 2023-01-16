<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DashboardController extends AbstractAuthController
{
    public function index() {
        return view('dashboard.index')->with('offers', Offer::all());
    }

    public function addOfferToUser(Request $request) {
        $data = $this->validate($request, [
            'id' => 'required',
        ]);
    
        Auth::user()->offers()->attach($data['id'], ['code' => Str::random(10)]);

        return redirect()->route('dashboard.index');
    }

    public function myOffers() {
        return view('dashboard.my_offers')->with('offers', Auth::user()->offers()->get());
    }
}
