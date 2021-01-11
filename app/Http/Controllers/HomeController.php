<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public static function categoryList()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public function index()
    {
        return view("home.index");
    }

    public function login()
    {
        return view("admin.login");
    }

    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials)){ //check database
                $request->session()->regenerate();

                return redirect()->intended('admin'); //back to admin page
            }
            return back()->withErrors([
                'email'=>'The provided credentials do not match our records.'
            ]);
        }
        else{
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/'); //redirect to home page when logged out
    }


    public function aboutus()
    {
        return view("home.about");
    }
}
