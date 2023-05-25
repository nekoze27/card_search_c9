<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CardSearchController extends Controller
{
    //
    public function card_search() {
        $users = User::all();
        return view('card_search', ['users'=> $users]);
    }
}
