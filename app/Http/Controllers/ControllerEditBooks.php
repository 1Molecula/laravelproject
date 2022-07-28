<?php
namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Book;

class ControllerEditBooks extends Controller
{

    public function editBookForm($id)
    {
        $book = Book::find($id);
        $nameBook = $book -> books;
        $author_id = $book -> author_id;
        $yearRelease = $book -> yearRelease;
        return view('editBooks', ['book' => $nameBook, 'author_id' => $author_id, 'yearRelease' => $yearRelease, 'id' => $id]);
    }


    public function editBook(Request $request)
    {
        $nameBook = $request->input('book');
        $author_id = $request->input('author_id');
        $yearRelease = $request->input('dateRelease');
        $id = $request->input('id');

        $author = Author::find($author_id);
        if(!empty($author -> authors)) {

        $book = Book::find($id);
        $book -> books = $nameBook;
        $book -> author_id = $author_id;
        $book -> yearRelease = $yearRelease;
        $book -> save();

        header("Refresh:0; url=/admin/books");
        }else{
            return view('errorNotAuthor');
        }
    }

}
