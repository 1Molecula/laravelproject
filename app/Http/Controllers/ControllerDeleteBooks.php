<?php
namespace App\Http\Controllers;

use App\Models\Book;

class ControllerDeleteBooks extends Controller
{

    public function deleteBook($id)
    {
        Book::find($id)->delete();
        header("Refresh:0; url=/admin/books");
    }

}
