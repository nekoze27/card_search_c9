<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\CardContents::create([
            'card_no' => '1',
            'name' => 'テスト',
            'category' => 'テスト',
            'hp' => '1',
            'weakness' => 'テスト',
            'resistance' => 'テスト',
            'escape_energy' => '1',
            'effect' => 'テスト',
            'user_id' => '1',
        ]);
    }
}
