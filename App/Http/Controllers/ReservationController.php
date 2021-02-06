<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Reservation::where('user_id',Auth::id())->get();
        return view('home.user_reservation',['datalist'=>$datalist]); //user_reservation.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,Hotel $hotel_id,Room $room_id)
    {
        $room = Room::find($room_id)->first();
        $adult = $request->input('adult');
        $kid = $request->input('kid');
        $total = $room->price*($adult+$kid);
        $days = $request->input('days');
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');
        return view('home.user_reservation_add',[
            'hotel_id'=>$hotel_id,
            'room_id'=>$room_id,
            'days'=>$days,
            'checkin'=>$checkin,
            'checkout'=>$checkout,
            'adult'=>$adult,
            'kid'=>$kid,
            'total'=>$total
        ]); //view-> user_reservation
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$hotel_id,$room_id)
    {
        $data = new Reservation;
        $data->user_id = Auth::id();
        $data->room_id = $room_id;
        $data->hotel_id = $hotel_id;
        $data->name = $request->input('name');
        $data->surname = $request->input('surname');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->message = $request->input('message');
        $data->days = $request->input('days');
        $data->total = $request->input('total');
        $data->adult = $request->input('adult');
        $data->kid = $request->input('kid');
        $data->checkin = $request->input('checkin');
        $data->checkout = $request->input('checkout');
        $data->status = $request->input('status');
        $data->IP = $_SERVER['REMOTE_ADDR'];
       // dd($data);
        $data->save();

        return redirect()->route('user_reservation')->with('success','Reservation saved successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation,$id)
    {
        $data = Reservation::find($id);
        $data->delete();
        return redirect()->back()->with('success','Reservation deleted successfully...');
    }
}
