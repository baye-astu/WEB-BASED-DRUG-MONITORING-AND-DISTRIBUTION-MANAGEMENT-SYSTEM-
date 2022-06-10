<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sell;
use App\Http\Middleware\Epsa3;
use DB;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dname = DB::select("select * from sells");
        return view('epsa3.salesreport')->with('sold',$dname);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dname = DB::select("select name from stocks");
        return view('epsa3.sell')->with('drug',$dname);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sell = new Sell;
        $sell->name = $request->input('name');
        $sell->unit = $request->input('unit');
        $sell->quantity = $request->input('quantity');
        $sell->unitprice = $request->input('uprice');
        $sell->totalprice =$request->input('totalprice');
        $sell->save();
        return redirect();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
