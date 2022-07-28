<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ControllerAuthorization extends Controller
{
    public function authorization(Request $request)
    {
        $password = $request->input('password');
        if ($password === '0000'){
            header("Refresh:0; url=/admin");
        }else{
            return view('authorizationFail');
        }
    }

    public function show()
    {
        return view('authorization');
    }
}
