<?php

namespace App\Http\Controllers;

use App\Models\askedQuestion;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){

        $faq = askedQuestion::all()->sortBy('created_at');

        // dd($faq);
        return view('user.home',['title'=>"Dashboard", 'faq' => $faq]);
    }
}
