<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Sequence;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            $predefinedValues = [
                [
                    'name' => 'The Bike Guy',
                    'cover' => '1.svg',
                    'user_id' => 1,
                ],
                [
                    'name' => 'We Are Business',
                    'cover' => '2.svg',
                    'user_id' => 1,
                ],
                [
                    'name' => 'Different Winter',
                    'cover' => '3.svg',
                    'user_id' => 1,
                ],
                [
                    'name' => 'Atomic Love',
                    'cover' => '4.svg',
                    'user_id' => 1,
                ],
                [
                    'name' => 'A Love Story',
                    'cover' => '5.svg',
                    'user_id' => 1,
                ]
            ];

            Book::Factory()
                ->count(5)
                ->state(new Sequence(...$predefinedValues))
                ->create();
        });
    }
}
