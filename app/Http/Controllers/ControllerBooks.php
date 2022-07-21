<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class ControllerBooks extends Controller
{

    public function show()
    {
        $books = DB::table('books')->get();
        return view('books', ['books' => $books]);
    }

}
