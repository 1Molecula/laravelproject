<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class ControllerAdmin extends Controller
{

    public function show()
    {
            return view('admin');
    }

}

