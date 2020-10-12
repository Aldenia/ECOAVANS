<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservationC = Reservation::all();
        //dd($voluntaryC);
        return view('reservation')->with('reservationN', $reservation);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
        return view('Reservations.create');
    }

   
    public function store(ReservationRequest $request)
    {
        $ReservationN= new donation;
        //$ReservationN->Id= $request->id;
        $ReservationN->reservationDate= $request->reservationDate;
        $ReservationN->reservationHour= $request->reservationHour;
        $ReservationN->adultQuantity= $request->adultQuantity;
        $ReservationN->childrenQuantity= $request->childrenQuantity;
        $ReservationN->tourType= $request->tourType;
        $ReservationN->tourPrice= $request->tourPrice;
        $ReservationN->user_id= $request->user_id;



        $ReservationN->save();
        return redirect()->route('welcome');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $id)
    {
        $DonationB = Donation::find($id); 
        return view('Donation.show',compact('DonationB'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $id)
    {

    $DonationE = Donation::find($id);
    return view('Donation.edit', compact('DonationE'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $id)
    {
        $DonationU = DonationU::find($id);
        $DonationU->id = $request->id;

        $DonationU->donorName = $request->donorName;
        $DonationU->donationType = $request->donationType;

        $DonationU->incomes_id = $request->incomes_id;
        $DonationU->save();

        return redirect()->route('Donations.donation');
    }



     

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $id)
    {
        $DonationE = Donation::find($id); $DonationE->delete();
    }
}
