<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class ControllerAdminBooks extends Controller
{

    public function show()
    {
        $books = Book::all();
        $index = 0;
        foreach ($books as $book) {
            $authors = $book -> authors;
            $nameAuthor[$index] = $authors;
            $index = $index + 1;
        }
        $index = 0;
        $i = 0;
        foreach ($books  as $book){
            $id = $book -> id;
            $i = $i + 1;
        }
        if ($i < $id){
            $newId = 0;
            $id = 0;
            foreach($books as $book){
                $newId = $book -> id;
                if($newId - $id !== 1){
                    $book -> id = $id + 1;
                    $book->save();
                    $id = $id + 1;
                } else{
                    $id = $newId;
                }
            }
        }
        return view('adminBooks', ['books' => $books, 'authors' => $nameAuthor, 'index' => $index]);
    }

}
