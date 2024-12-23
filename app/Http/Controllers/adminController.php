<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class adminController extends Controller
{
    public function index () {

        $user = User::all();
        return view('admin.dashboard', [
            'title' => 'Arsindo Admin' 
        ], compact('user'));
    }
}
