<?php

namespace App\Http\Controllers;

use App\Models\askedQuestion;
use App\Models\detailMobil;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){

        $faq = askedQuestion::all()->sortBy('created_at');

        // dd($faq);
        return view('user.home',['title'=>"Dashboard", 'faq' => $faq]);
    }

    public function show(){
        $dataMobil = detailMobil::all();

        // dd($dataMobil);

        return view('user.detailMobil', ["title" => "Pilihan mobil beragam", 'dataMobil' => $dataMobil]);
    }
}
