<?php

namespace App\Http\Controllers;

use App\Income;
use App\Http\Requests\IncomeRequest;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $income = Income::orderBy('id', 'DESC')->paginate();
        return view('income.index', compact('income'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('income.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(IncomeRequest $request)
    {
        $income= new Income();
        $income->id= $request->id;
        $income->description= $request->description;
        $income->quantity= $request->quantity;
        $income->incomeData= $request->incomeData;

        $income->save;
        return redirect()->route('donation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */

    public function show(Income $id)
    {
        $income = Income::find($id); 
        return view('income.show',compact('income'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */

    public function edit(Income $id)
    {

    $income = Income::find($id);
    return view('income.edit', compact('income'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Income $id)
    {
        $income= new Income();
        $income->id= $request->id;
        $income->description= $request->description;
        $income->quantity= $request->quantity;
        $income->incomeData= $request->incomeData;

        $income->save;
        return redirect()->route('donation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */

    public function destroy(Income $id)
    {
        $income = Income::find($id); $income->delete();
    }


}
