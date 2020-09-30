<?php

namespace App\Http\Controllers;

use App\Donation;
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
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */

    public function destroy(Donation $id)
    {
        $donation = Donation::find($id); $donation->delete();
    }
}