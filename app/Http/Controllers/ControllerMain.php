<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class ControllerMain extends Controller
{

    public function show()
    {
        return view('main');
    }

}
