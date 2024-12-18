<?php

namespace App\Http\Controllers;

use App\Models\askedQuestion;
use App\Http\Requests\StoreaskedQuestionRequest;
use App\Http\Requests\UpdateaskedQuestionRequest;
use Illuminate\Http\Request;

class AskedQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $question = askedQuestion::all()->sortBy('created_at');

        return view('admin.faq.index', ["title" => 'FAQs'], compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create', ["title"=>"Create FAQ"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string', 'max:255']
        ]);

        askedQuestion::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('faq.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(askedQuestion $askedQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = askedQuestion::find($id);

        return view ('admin.faq.update',['title'=>"Update FAQ"], compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string', 'max:255']
        ]);

        $faqs = askedQuestion::find($id);
        $faqs->question = $request->question;
        $faqs->answer = $request->answer;

        $faqs->save();

        return redirect()->route('faq.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = askedQuestion::findOrFail($id);

        $data->delete();

        return redirect()->route('faq.index');
    }
}
