<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;
use App\Models\detailMobil;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function book($id){
        $kendaraan = detailMobil::findOrFail($id);
        // dd($kendaraan);
        return view('user.bookingMobil', ['title' => 'Booking Sekarang!'], compact('kendaraan'));
    }
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());        
            $dataBooking = $request->validate([
                'mobil_id' => ['required'],
                'namalengkap' => ['required', 'string', 'max:255'],
                'alamatpenjemputan' => ['required', 'string', 'max:255'],
                'tanggalpenjemputan' => ['required', 'date'],
                'waktupenjemputan' => ['required', 'date_format:H:i'],
                'tanggalpengantaran' => ['required', 'date'],
                'waktupengantaran' => ['required', 'date_format:H:i'],
                'identitas' => ['required', 'image', 'mimes:jpg,jpeg,png'],
                'tourguide' => ['required', 'boolean'],
            ]);

            if ($request->hasFile('identitas')) {
                $dataBooking['identitas'] = $request->file('identitas')->store('kendaraan-images');
            }
    
            booking::create($dataBooking);

            return redirect()->back()->with('success', 'Booking berhasil dibuat!');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(booking $booking)
    {
        //
    }
}
