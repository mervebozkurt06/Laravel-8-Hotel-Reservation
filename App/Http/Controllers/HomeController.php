<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Review;
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

    public static function countreview($id)
    {
        return Review::where('hotel_id',$id)->count();
    }

    public static function avrgreview($id)
    {
        return Review::where('hotel_id',$id)->average('rate');
    }



    public function index()
    {
        $setting = Setting::first();
        $slider = Hotel::select('id','title','image','country','slug')->limit(3)->get();
        $daily = Hotel::select('id','title','image','slug')->limit(3)->get();
        $last = Hotel::select('id','title','address','image','country','slug')->limit(6)->get();
        $picked = Category::select('id','title')->limit(5)->get();

        #print_r($slider);
        #exit();
        $data= [
            'setting'=>$setting,
            'slider'=>$slider,
            'daily'=>$daily,
            'last'=>$last,
            'picked'=>$picked,
            'page'=>'home'
        ];

        return view('home.index',$data);
    }

    public function hotel($id,$slug)
    {
        $data = Hotel::find($id);
        $datalist = Image::where('hotel_id',$id)->get();
        $reviews = Review::where('hotel_id',$id)->get();
        #print_r($data);
        #exit();
        return view('home.hotel_detail',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);
    }

    public function gethotel(Request $request)
    {
        $search = $request->input('search');
        $count = Hotel::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data = Hotel::where('title','like','%'.$search.'%')->first();
            return redirect()->route('hotel',['id'=>$data->id,'slug'=>$data->slug]);
        }
        else
        {
            return redirect()->route('hotellist',['search'=>$search]);
        }
    }

    public function hotellist($search)
    {
        $datalist = Hotel::where('title','like','%'.$search.'%')->get();
        return view('home.search_hotels',['search'=>$search,'datalist'=>$datalist]);
    }

    public function categoryhotels($id,$slug)
    {
        $datalist = Hotel::where('category_id',$id)->get();
        $data = Category::find($id);
        #print_r($data);
        #exit();
        return view('home.category_hotels',['data'=>$data,'datalist'=>$datalist]);
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
