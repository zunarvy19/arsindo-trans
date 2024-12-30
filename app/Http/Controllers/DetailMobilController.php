<?php

namespace App\Http\Controllers;

use App\Models\detailMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DetailMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detailMobil = detailMobil::paginate(5);

        return view('admin.kendaraan.index', ['title' => 'Kendaraan Arsindo'], compact('detailMobil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kendaraan.create', ["title"=>"Tambah Kendaraan"]);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $validatedData = $request->validate([
            'ukuran' => ['string', 'required'],
            'mobil' => ['string', 'required'],
            'kursi' => ['integer', 'required'],
            'harga' => ['numeric', 'required'],
            'foto' => ['required', 'image', 'mimes:jpeg,png,jpg'],
        ]);

        if ($request->hasFile('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('kendaraan-images');
        }

        detailMobil::create($validatedData);

        return redirect()->route('kendaraan.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(detailMobil $detailMobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(detailMobil $detailMobil)
    {
        $data = detailMobil::find($detailMobil->id);

        return view ('admin.kendaraan.update',['title'=>"Update Kendaraan"], compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, detailMobil $detailMobil)
    {
        $detailMobil = detailMobil::findOrFail($detailMobil->id);
    
        $rules = [
            'ukuran' => ['string', 'required'],
            'mobil' => ['string', 'required'],
            'kursi' => ['integer', 'required'],
            'harga' => ['numeric', 'required'],
        ];
    
        $validatedData = $request->validate($rules);
    

        if ($request->file('foto')) {
            if ($detailMobil->foto) {
                Storage::delete($detailMobil->foto);
            }
    

            $validatedData['foto'] = $request->file('foto')->store('kendaraan-images');
        }
    

        $detailMobil->update($validatedData);

        return redirect()->route('kendaraan.index')->with('success', 'Data berhasil diperbarui!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(detailMobil $detailMobil)
    {

        if($detailMobil->foto){
            Storage::delete($detailMobil->foto);
        }

        detailMobil::destroy($detailMobil->id);

        return redirect()->route('kendaraan.index');
    }
}
