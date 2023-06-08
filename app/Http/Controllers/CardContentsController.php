<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CardContents;

class CardContentsController extends Controller
{
    //
    public function create() {
        return view('card_contents.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'card_no' => 'unique:card_contents,card_no|required|max:20',
            'name' => 'required|max:20',
            'category' => 'required|max:20',
            'hp' => 'nullable|integer|max:500',
            'weakness' => 'max:20',
            'resistance' => 'max:20',
            'escape_energy' => 'nullable|integer|max:10',
            'effect' => 'max:200',
        ]);

        $validated['user_id'] = auth()->id();


        $card_contents = CardContents::create($validated);

       
        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function index() {
        $card_contents=CardContents::all();
        return view('card_contents.index', compact('card_contents'));
    }

    public function show($card_contents_id) {
        $card_content = CardContents::where('card_contents_id', $card_contents_id)->first();
        return view('card_contents.show', compact('card_content'));
    }
}
