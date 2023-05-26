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
            'card_no' => 'required|max:20',
            'name' => 'required|max:20',
            'category' => 'required|max:20',
            'hp' => 'integer|max:500',
            'weakness' => 'max:20',
            'resistance' => 'max:20',
            'escape_energy' => 'integer|max:20',
            'effect' => 'max:20',
        ]);
        $card_contents = CardContents::create($validated);

        $card_contents = CardContents::create([
            'card_no' => $request->card_no,
            'name' => $request->name,
            'category' => $request->category,
            'hp' => $request->hp,
            'weakness' => $request->weakness,
            'resistance' => $request->resistance,
            'escape_energy' => $request->escape_energy,
            'effect' => $request->effect,
        ]);
        $request->session()->flash('message', '保存しました');
        return back();
    }
}
