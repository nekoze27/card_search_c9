<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CardContents;

class CardSearchController extends Controller
{

    public function card_search(Request $request) 
    {
        $name = $request->input('name');
        $category = $request->input('category');

        $query = CardContents::query();

        if ($name) {
            $query->where('name', 'LIKE', "%{$name}%");
        }

        if ($category) {
            $query->where('category', $category);
        }

        $card_contents = $query->orderByDesc('card_no')->paginate(10);

     

        return view('card_contents.index', compact('card_contents'));
    }
}
