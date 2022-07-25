<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Author;

class ControllerEditAuthors extends Controller
{

    public function editAuthorForm($id)
    {
        $author = Author::find($id);
        $name = $author -> authors;
        $yearBirth = $author -> yearBirth;
        return view('editAuthors', ['author' => $name, 'yearBirth' => $yearBirth, 'id' => $id]);
    }


    public function editAuthor(Request $request)
    {
        $name = $request->input('author');
        $yearBirth = $request->input('yearBirth');
        $id = $request->input('id');

        $author = Author::find($id);
        $author -> authors = $name;
        $author -> yearBirth = $yearBirth;
        $author -> save();

        header("Refresh:0; url=/admin/authors");
    }

}
