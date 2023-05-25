<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardContentsController extends Controller
{
    //
    public function create() {
        return view('card_contents.create');
    }
}
