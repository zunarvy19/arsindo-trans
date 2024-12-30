<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataReview = Review::paginate(5);

        return view('admin.review.index', ['title' => 'Review Arsindo'], compact('dataReview'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.review.create', ["title" => "Create Review"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $validatedData = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'review' => ['required', 'string', 'max:255'],
            'profile' => ['image', 'mimes:jpeg,png,jpg'],
        ]);

        if ($request->hasFile('profile')) {
            $validatedData['profile'] = $request->file('profile')->store('kendaraan-images');
        }

        Review::create($validatedData);

        return redirect()->route('review.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        $data = Review::findOrFail($review->id);

        return view('admin.review.update', ['title' => 'Update Review'], compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $dataReview = Review::findOrFail($review->id);

        $rules = [
            'nama' => ['required', 'string', 'max:255'],
            'review' => ['required', 'string', 'max:255'],
        ];

        $validatedData = $request->validate($rules);

        if($request->file('profile')){
            if($dataReview->profile ){
                Storage::delete( $dataReview->profile);
            }

            
            $validatedData['profile'] = $request->file('profile')->store('kendaraan-images');
        }


        $dataReview->update($validatedData);

        return redirect()->route('review.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
