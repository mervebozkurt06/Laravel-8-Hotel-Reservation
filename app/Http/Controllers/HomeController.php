<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class HomeController extends Controller
{

    public static function categoryList()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function getSetting()
    {
        return $setting = Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting]);
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
        $setting = Setting::first();
        return view("home.about",['setting'=>$setting]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view("home.references",['setting'=>$setting]);
    }
    public function faq()
    {
        return view("home.about");
    }
    public function contact()
    {
        $setting = Setting::first();
        return view("home.contact",['setting'=>$setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();


        return redirect()->route('contact')->with('success','Your message has been sent!');
    }

}
