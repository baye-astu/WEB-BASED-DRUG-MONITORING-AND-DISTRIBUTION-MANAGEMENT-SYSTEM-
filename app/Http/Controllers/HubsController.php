<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Epsa;
use Illuminate\Http\Request;
use App\Models\Hub;
use DB;

class HubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hubs = DB::select("select * from hubs");
        return view('epsa.hub')->with('hubs',$hubs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('epsa.addhub');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hubs = new Hub;
        $hubs->name = $request->input('name');
        $hubs->phoneno = $request->input('phoneno');
        $hubs->city = $request->input('city');
        $hubs->branchmanager = $request->input('brmanager');
        $hubs->pobox = $request->input('pobox');
        $hubs->distancefromaddis = $request->input('distance_from_addis');
        $hubs->faxnumber = $request->input('faxnumber');
        $hubs->save();
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
