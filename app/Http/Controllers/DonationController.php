<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;

use App\Http\Requests\DonationRequest;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donationC = Donation::all();
        //dd($voluntaryC);
        return view('donation')->with('donationN', $donationC);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //$voluntary= Voluntary
        //nombre de la vista
        return view('Donations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DonationRequest $request)
    {
        $DonationN= new donation;
        //$VoluntaryN->Id= $request->id;
<<<<<<< HEAD
        $DonationN->donorName= $request->donorName;
        $DonationN->donationType= $request->donationType;
        $DonationN->incomes_id= $request->incomes_id;
      
=======
        $DonationN->name= $request->name;
        $DonationN->lastName= $request->lastName;
        $DonationN->donationType= $request->donationType;
        $DonationN->quantity= $request->quantity;
        $DonationN->description= $request->description;
        $DonationN->currentDate= $request->currentDate;
        $DonationN->phone= $request->phone;
        $DonationN->mail= $request->mail;
>>>>>>> 71309166b971bf0f15da377bc74de4db61a8848c

        $DonationN->save();
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
<<<<<<< HEAD
=======
        //Donation
>>>>>>> 71309166b971bf0f15da377bc74de4db61a8848c
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
<<<<<<< HEAD
        $DonationU = DonationU::find($id);
        $DonationU->id = $request->id;

        $DonationU->donorName = $request->donorName;
        $DonationU->donationType = $request->donationType;

        $DonationU->incomes_id = $request->incomes_id;
=======
        $DonationU = Donation::find($id);
        $DonationU->id= $request->id;
        $DonationU->name= $request->name;
        $DonationU->lastName= $request->lastName;
        $DonationU->donationType= $request->donationType;
        $DonationU->quantity= $request->quantity;
        $DonationU->description= $request->description;
        $DonationU->currentDate= $request->currentDate;
        $DonationU->phone= $request->phone;
        $DonationU->mail= $request->mail;

>>>>>>> 71309166b971bf0f15da377bc74de4db61a8848c
        $DonationU->save();

        return redirect()->route('Donations.donation');
    }

<<<<<<< HEAD


     

=======
>>>>>>> 71309166b971bf0f15da377bc74de4db61a8848c
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
