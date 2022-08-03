<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerAuthentication extends Controller
{
    public function authentication(Request $request)
    {
        $user = $request->only(['name', 'password']);
        if (Auth::attempt($user)){
            return redirect('/admin');
        }else{
            return view('errorAuthentication');
        }
    }
}
