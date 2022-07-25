<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Author;
use App\Models\Book;

class ControllerDelete extends Controller
{

    public function deleteBook($id)
    {
        Book::find($id)->delete();
        header("Refresh:0; url=/admin/books");
    }

}
