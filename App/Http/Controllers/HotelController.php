<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Hotel::where('user_id',Auth::id())->get();
        return view('home.user_hotel',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::with('children')->get();
        return view('home.user_hotel_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Hotel;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->star = $request->input('star');
        $data->address = $request->input('address');
        $data->detail = $request->input('detail');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->email = $request->input('email');
        $data->city = $request->input('city');
        $data->country = $request->input('country');
        $data->location = $request->input('location');
        $data->email = $request->input('email');
        $data->image = Storage::putFile('images',$request->file('image')); // file upload

        $data->save();
        return redirect()->route('user_hotels')->with('success','Hotel Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel,$id)
    {
        $data = Hotel::find($id);
        $datalist = Category::with('children')->get();

        return view('home.user_hotel_edit',['data'=>$data,'datalist'=>$datalist]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel,$id)
    {
        $data = Hotel::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->star = $request->input('star');
        $data->address = $request->input('address');
        $data->detail = $request->input('detail');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->email = $request->input('email');
        $data->city = $request->input('city');
        $data->country = $request->input('country');
        $data->location = $request->input('location');
        $data->email = $request->input('email');
        if($request->file('image')!=null)
        {
            $data->image = Storage::putFile('images',$request->file('image')); // file upload
        }
        $data->save();
        return redirect()->route('user_hotels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel,$id)
    {
        //DB::table('hotels')->where('id','=',$id)->delete();
        $data = Hotel::find($id);
        $data->delete();

        return redirect()->route('user_hotels');
    }
}
