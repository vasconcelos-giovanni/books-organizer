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
                // Image by <a href="https://www.freepik.com/free-vector/bike-guy-wattpad-book-cover_28596242.htm#query=book%20cover&position=4&from_view=keyword&track=ais">Freepik</a>
                [
                    'name' => 'The Bike Guy',
                    'cover' => '1.svg',
                    'user_id' => 1,
                ],
                // Image by <a href="https://www.freepik.com/free-vector/abstract-business-book-cover-template_10882508.htm#query=book%20cover&position=28&from_view=keyword&track=ais">Freepik</a>
                [
                    'name' => 'We Are Business',
                    'cover' => '2.svg',
                    'user_id' => 1,
                ],
                // Image by <a href="https://www.freepik.com/free-vector/abstract-elegant-winter-book-cover_11734660.htm#query=book%20cover&position=3&from_view=keyword&track=ais">Freepik</a>
                [
                    'name' => 'Different Winter',
                    'cover' => '3.svg',
                    'user_id' => 1,
                ],
                // Image by <a href="https://www.freepik.com/free-vector/atomic-love-wattpad-book-cover_21741512.htm#query=book%20cover&position=28&from_view=keyword&track=ais">Freepik</a>
                [
                    'name' => 'Atomic Love',
                    'cover' => '4.svg',
                    'user_id' => 1,
                ],
                // Image by <a href="https://www.freepik.com/free-vector/elegant-love-book-cover-template_11754300.htm#query=book%20cover&position=37&from_view=keyword&track=ais">Freepik</a>
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
