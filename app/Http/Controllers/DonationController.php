<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;

use App\Http\Requests\DonationRequest;
use App\Http\Requests\DonationRequest;
use Illuminate\Http\Request;

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
        $donation = Donation::orderBy('id', 'DESC')->paginate();
        return view('donation.index', compact('donation'));

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
        return view('donation.create');
    }
//Hola

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
        $DonationN->name= $request->name;
        $DonationN->lastName= $request->lastName;
        $DonationN->donationType= $request->donationType;
        $DonationN->quantity= $request->quantity;
        $DonationN->description= $request->description;
        $DonationN->currentDate= $request->currentDate;
        $DonationN->phone= $request->phone;
        $DonationN->mail= $request->mail;

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
        //Donation

    public function store(DonationRequest $request)
    {
        $donation= new Donation();
        $donation->id= $request->id;
        $donation->donorName= $request->donorName;
        $donation->donationType= $request->donationType;
        $donation->incomes_id= $request->incomes_id;

        $donation->save;
        return redirect()->route('donation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */

    public function show(Donation $id)
    {
        $donation = Donation::find($id); 
        return view('donation.show',compact('donation'));
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

     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */

    public function edit(Donation $id)
    {

    $donation = Donation::find($id);
    return view('donation.edit', compact('donation'));


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

        $DonationU->save();

        return redirect()->route('Donations.donation');

     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Donation $id)
    {
        $donation= new Donation();
        $donation->id= $request->id;
        $donation->donorName= $request->donorName;
        $donation->donationType= $request->donationType;
        $donation->incomes_id= $request->incomes_id;

        $donation->save;
        return redirect()->route('donation.index');

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
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */

    public function destroy(Donation $id)
    {
        $donation = Donation::find($id); $donation->delete();
    }
}
