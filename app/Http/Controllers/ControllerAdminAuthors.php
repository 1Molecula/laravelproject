<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Author;
class ControllerAdminAuthors extends Controller
{

    public function show()
    {
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
        $i = 0;
        foreach ($authors  as $author){
            $id = $author -> id;
            $i = $i + 1;
        }
        if ($i < $id){
            $newId = 0;
            $id = 0;
            foreach($authors  as $author){
                $newId = $author -> id;
                if($newId - $id !== 1){
                    $author -> id = $id + 1;
                    $author->save();
                    $id = $id + 1;
                } else{
                    $id = $newId;
                }
            }
        }
        $index = 0;
        return view('adminAuthors', ['authors' => $authors, 'numberOfBooks' => $numberOfBooks, 'index' => $index]);
    }

}
