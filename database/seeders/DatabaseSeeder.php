<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Country;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Country::factory(50)->create();
        Author::factory(25)->create();
        Book::factory(15)->create();

        // Table author_book
        foreach (range(1, 15) as $id) {
            $book = Book::find($id);

            // authors, funcón a definir en el modelo de libros
            $book->authors()->attach(random_int(1, 25));
        }
    }
}
