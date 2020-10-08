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
        return view('donation')->with('donationN', $donation);
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
        $DonationN->donorName= $request->donorName;
        $DonationN->donationType= $request->donationType;
        $DonationN->incomes_id= $request->incomes_id;
      

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
