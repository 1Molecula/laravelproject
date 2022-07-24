<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Author;

class ControllerBooks extends Controller
{

    public function show($id)
    {
        $author = Author::find($id);
        $books = $author->books;
        return view('books', ['author' => $author, 'books' => $books]);
    }

}
