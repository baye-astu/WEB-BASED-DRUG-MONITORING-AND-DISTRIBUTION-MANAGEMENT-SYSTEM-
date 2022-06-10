<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use Illuminate\Http\Request;
use App\Http\Middleware\Epsa3;
use DB;

class FStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user_id = Auth()->id();
        $stock = DB::select("select * from stocks where user_id='".$user_id."'");
        return view('epsa3.index')->with('stocks',$stock);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stock = DB::select("select * from stocks");
        return view('epsa3.updatestock')->with('stocks',$stock);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock = new Stock;
        $stock->name = $request->input('name');
        $stock->batchno = $request->input('batchno');
        $stock->unit = $request->input('desc');
        $stock->expdate = $request->input('expdate');
        $stock->quantity = $request->input('manfdate');
        $stock->facility = $request->input('madein');
        $stock->save();
        return redirect()->route('epsa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quantity= DB::select('select * from stocks where id = '."$id".'');
        return view('epsa3.editstock')->with('quantity',$quantity);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stockup = Stock::find($id);
        $stockup->quantity = $request->input('squantity');
        $stockup->save();
        return redirect('../fstock/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stock::where('id', $id)->delete();
        return redirect('../fstock/create');
    }
}
