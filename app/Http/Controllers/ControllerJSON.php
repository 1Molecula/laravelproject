<?php
namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class ControllerJSON extends Controller
{

    public function getBooks()
    {
        $books = Book::with('author') -> get();
        return response() -> json($books);
    }

    public function getBook($id)
    {
        $book = Book::with('author') -> find($id);
        return response() -> json($book);
    }

    public function updateBook($id, Request  $request)
    {
        $nameBook = $request->input('books');
        $author_id = $request->input('author_id');
        $yearRelease = $request->input('yearRelease');

            $book = Book::find($id);
            $book->books = $nameBook;
            $book->author_id = $author_id;
            $book->yearRelease = $yearRelease;
            $book->save();
    }

    public function deleteBook($id)
    {
        Book::find($id)->delete();
        return response(null, 204);
    }

}
