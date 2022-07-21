<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
class ControllerBooks extends Controller
{

    public function show()
    {
        $books = Book::all();
        return view('books', ['books' => $books]);
    }

}
