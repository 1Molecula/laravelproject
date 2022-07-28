<?php
namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;

class ControllerCreateAuthors extends Controller
{
    public function createAuthorForm()
    {
        return view('createAuthors');
    }

    public function createAuthor(Request $request)
    {
        $authorName = $request->input('authorName');
        $yearBirth = $request->input('yearBirth');

        $author = new Author;
        $author -> authors = $authorName;
        $author -> yearBirth = $yearBirth;
        $author -> save();

        header("Refresh:0; url=/admin/authors");
    }

}
