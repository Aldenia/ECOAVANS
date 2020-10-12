<?php

namespace App\Http\Controllers;

use App\Income;
use Illuminate\Http\Request;
use App\Http\Requests\IncomeRequest;

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
        $incomeC = Income::all();
        //dd($voluntaryC);
        return view('income')->with('incomeN', $income);
    
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
        return view('Inc.create');
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
        $IncomeN= new Income();
        //$income->id= $request->id;
        $IncomeN->description= $request->description;
        $IncomeN->quantity= $request->quantity;
        $IncomeN->incomeDate= $request->incomeDate;

        $IncomeN->save;
        return redirect()->route('welcome');

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
        $IncomeB = Income::find($id); 
        return view('Income.show',compact('IncomeB'));

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

    $IncomeE = Income::find($id);
    return view('Income.edit', compact('IncomeE'));

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
        $IncomeU= Income::find($id);
        $IncomeU->id= $request->id;
        $IncomeU->description= $request->description;
        $IncomeU->quantity= $request->quantity;
        $IncomeU->incomeDate= $request->incomeDate;

        $IncomeU->save;
        return redirect()->route('Income.index');

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
        $incomeE = Income::find($id); $IncomeE->delete();
        $income = Income::find($id); $income->delete();

    }


}
