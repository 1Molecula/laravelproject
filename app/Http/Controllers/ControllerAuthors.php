<?php
namespace App\Http\Controllers;
use App\Models\Author;

class ControllerAuthors extends Controller
{

    public function show()
    {
        $authors = Author::all();
        return view('authors', ['authors' => $authors]);
    }

}
