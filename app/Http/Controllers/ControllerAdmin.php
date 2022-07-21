<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class ControllerAdmin extends Controller
{

    public function show()
    {
        $books = DB::table('books')->get();
        return view('admin', ['books' => $books]);
    }

}

