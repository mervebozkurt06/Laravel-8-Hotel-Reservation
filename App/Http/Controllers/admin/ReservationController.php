<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
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
        $datalist = Reservation::all();
        //dd($datalist);
        return view('admin.reservations',['datalist'=>$datalist]); //user_reservation.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation,$id)
    {
        $datalist = Reservation::where('user_id',Auth::id())->where('id',$id)->get();
        //dd($datalist);
        return view('admin.reservation_show',['datalist'=>$datalist]); //user_reservation.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Reservation $reservation,$id)
{
    $data=Reservation::find($id);

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
    $data->save();
    return back()->with('success','Reservation updated');
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation,$id)
    {
        $data = Reservation::find($id);
        return view('admin.reservation_edit',['data'=>$data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
