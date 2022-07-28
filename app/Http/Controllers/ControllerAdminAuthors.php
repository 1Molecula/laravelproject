<?php
namespace App\Http\Controllers;

use App\Models\Author;

class ControllerAdminAuthors extends Controller
{

    public function show()
    {
        $numberOfBooks[0] = 0;
        $authors = Author::all();
        $i = 0;
        $index = 0;
        foreach ($authors as $author) {
        $books = $author -> books;
            foreach ($books as $book) {
                $i = $i + 1;
            }
            $numberOfBooks[$index] = $i;
            $i = 0;
            $index = $index + 1;
        }
        $index = 0;
        return view('adminAuthors', ['authors' => $authors, 'numberOfBooks' => $numberOfBooks, 'index' => $index]);
    }

}
