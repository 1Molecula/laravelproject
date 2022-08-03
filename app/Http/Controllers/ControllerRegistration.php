<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerRegistration extends Controller
{
    public function saveNewUser(Request $request)
    {
        if(empty(User::where('name', ($request->input('name')))->first())) {
            $newUser = new User;
            $newUser->name = $request->input('name');
            $newUser->password = $request->input('password');
            $newUser->save();
            if($newUser){
                Auth::logout();
                Auth::login($newUser);
                return redirect('/admin');
            }
        }
        return view('errorRegistration');
    }
}
