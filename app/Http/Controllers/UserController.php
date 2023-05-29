<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login( Request $req )
    {
        $user = User::where('email',$req->email)->first();
        $password = Hash::make($req->password);
        if(!$user && Hash::check($password,$user->password ) ){
            return redirect()->back()->withInput();
        }else{
            $req->session()->put("user",$user);
            return redirect("/");
        }

    }
}
