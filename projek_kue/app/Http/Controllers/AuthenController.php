<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
    //Registration
    public function registration()
    {
        return view('/register');
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:12',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Hash password sebelum disimpan

        if ($user->save()) {
            return back()->with('success', 'Registrasi berhasil.');
        } else {
            return back()->with('fail', 'Terjadi kesalahan.');
        }
    }
    ////Login
    public function login()
    {
        return view('/login');
    }
    public function loginUser(Request $request)
    {
        $request->validate([            
            'email'=>'required|email:users',
            'password'=>'required|min:8|max:12'
        ]);

        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('/'); // Corrected redirect path
            } else {
                return back()->with('fail','Password does not match!');
            }
        } else {
            return back()->with('fail','This email is not registered.');
        }        
    }
    //// Dashboard
    public function data_kue()
    {
        // return "Welcome to your dashabord.";
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('/data_kue',compact('data'));
    }
    ///Logout
    public function logout()
    {
        $data = array();
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
