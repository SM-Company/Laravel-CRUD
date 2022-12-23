<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\ProductosController;

class LoginController extends Controller
{
    public function index()
    {
        //

        
    }

    public function register(Request $request)
    {
        //Validar los datos

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $UserName = $request->name;
        $user->save();

        Auth::login($user);

        return redirect()->action([ProductosController::class, 'index']);
        return view("welcome", compact("UserName"));
    }

    public function login(Request $request)
    {
        //Validation

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
            //"active" => true
        ];

        $remenber = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials,$remenber)) {

            $request->session()->regenerate();

            return redirect()->action([ProductosController::class, 'index']);

        }else {
            return redirect('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
    
}
