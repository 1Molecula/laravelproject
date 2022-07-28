<?php
namespace App\Http\Controllers;
use App\Models\Book;

class ControllerAdminBooks extends Controller
{

    public function show()
    {
        $books = Book::all();
        $nameAuthor[0] = '';
        $index = 0;
        foreach ($books as $book) {
            $authors = $book -> author;
            $nameAuthor[$index] = $authors;
            $index = $index + 1;
        }
        $index = 0;
        return view('adminBooks', ['books' => $books, 'authors' => $nameAuthor, 'index' => $index]);
    }

}
