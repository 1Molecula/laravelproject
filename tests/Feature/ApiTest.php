<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ApiTest extends TestCase
{

    public function testGetBooks()
    {
        $response = $this->json('get', '/api/v1/books/list');

        $response->assertJson(fn(AssertableJson $json) => $json
            ->first(fn($json) => $json->has("books")
                ->etc()
            )
        );
    }

    public function testGetBook()
    {
        $response = $this->json('get', '/api/v1/books/by-4');
        $response->assertJson(fn(AssertableJson $json) => $json->has("books")
            ->etc()
        );
    }

    public function testDeleteBook()
    {
        $book = new Book();
        $book->books = 'test';
        $book->author_id = 1;
        $book->yearRelease = 123;
        $book -> save();

        $book = Book::latest('id')->first();
        $id = $book-> id;

        $response = $this->json('delete', '/api/v1/books/' . $id);

        $response
            ->assertStatus(204);
    }

    public function testUpdateBook()
    {
        $book = new Book();
        $book->books = 'test';
        $book->author_id = 1;
        $book->yearRelease = 123;
        $book -> save();

        $book = Book::latest('id')->first();
        $id = $book-> id;

        $response = $this->json('put', '/api/v1/books/update' . $id,['books' => 'test_put', 'author_id' => 1, 'yearRelease' => 1234]);

        $response
            ->assertStatus(200);

        $response = $this->json('get', '/api/v1/books/by-' . $id);

        $response
            ->assertJson([
                'books' => 'test_put',
                'yearRelease' => 1234
            ]);
    }
}
