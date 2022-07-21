<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
class ControllerAdminAuthors extends Controller
{

    public function show()
    {
        $books = Book::all();
        return view('admin', ['books' => $books]);
    }

}
