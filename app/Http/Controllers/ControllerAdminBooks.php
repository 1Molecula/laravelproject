<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
class ControllerAdminBooks extends Controller
{

    public function show()
    {
        $books = Book::all();
        return view('adminBooks', ['books' => $books]);
    }

}
