<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use Illuminate\Http\Request;

class ControllerCreateBooks extends Controller
{
    public function createBookForm()
    {
        return view('createBooks');
    }

    public function createBook(Request $request)
    {
        $nameBook = $request->input('book');
        $author_id = $request->input('author_id');
        $yearRelease = $request->input('dateRelease');

        $book = new Book;
        $book -> books = $nameBook;
        $book -> author_id = $author_id;
        $book -> yearRelease = $yearRelease;
        $book -> save();

        header("Refresh:0; url=/admin/books");
    }

}
