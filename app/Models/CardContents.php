<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardContents extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_no',
        'name',
        'category',
        'hp',
        'weakness',
        'resistance',
        'escape_energy',
        'effect',
    ];
}
