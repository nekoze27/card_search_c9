<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardContents extends Model
{
    use HasFactory;

    protected $primaryKey = 'card_contents_id';

    protected $fillable = [
        'card_no',
        'name',
        'category',
        'hp',
        'weakness',
        'resistance',
        'escape_energy',
        'effect',
        'user_id'
    ];

    public function usr() {
        return $this->belongsTo(User::class);
    }
}
