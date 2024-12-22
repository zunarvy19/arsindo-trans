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

    public function show(Request $request) {
        $query = detailMobil::query();
    
        if ($request->has('kursi') && is_array($request->kursi)) {
            $query->whereIn('kursi', $request->kursi);
        }
    
        if ($request->has('transmisi') && is_array($request->transmisi)) {
            $query->whereIn('transmisi', $request->transmisi);
        }

        if ($request->has('sort')) {
            if ($request->sort === 'price_asc') {
                $query->orderBy('harga', 'asc');
            } elseif ($request->sort === 'price_desc') {
                $query->orderBy('harga', 'desc');
            }
        }
    
        $dataMobil = $query->get();
    
        return view('user.detailMobil', [
            "title" => "Pilihan mobil beragam",
            'dataMobil' => $dataMobil
        ]);
    }
}
