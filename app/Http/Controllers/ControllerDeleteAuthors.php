<?php
namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Book;

class ControllerDeleteAuthors extends Controller
{

    public function deleteAuthor($id)
    {
        Author::find($id)->delete();
        Book::where('author_id', $id)->delete();
        header("Refresh:0; url=/admin/authors");
    }

}
