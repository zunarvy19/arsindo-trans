<?php

namespace App\Http\Controllers;

use App\Models\askedQuestion;
use App\Models\detailMobil;
use App\Models\Review;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $dataReview = Review::all()->sortBy('created_at')->take(4);

        $faq = askedQuestion::all()->sortBy('created_at');

        // dd($faq);
        return view('user.home',['title'=>"Dashboard", 'faq' => $faq, 'dataReview' => $dataReview]);
    }

    public function show(Request $request) {
        $query = detailMobil::query();
    
        if ($request->has('kursi') && is_array($request->kursi)) {
            $query->whereIn('kursi', $request->kursi);
        }
    
        // if ($request->has('transmisi') && is_array($request->transmisi)) {
        //     $query->whereIn('transmisi', $request->transmisi);
        // }

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

    public function book(){
        return view('user.bookingMobil', ['title' => 'Booking Sekarang!']);
    }

    public function review(){
        $dataReview = Review::all()->sortBy('created_at');

        return view('user.customerReview', ['title' => 'Customer Review'], compact('dataReview'));
    }
}
