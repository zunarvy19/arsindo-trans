<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\detailMobil;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class adminController extends Controller
{
    public function index () {

        $user = User::all();
        $booking = booking::all();
        $kendaraan = detailMobil::all();
        return view('admin.dashboard', [
            'title' => 'Arsindo Admin' 
        ], compact('user', 'kendaraan', 'booking'));
    }
}
