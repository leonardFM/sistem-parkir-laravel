<?php

namespace App\Http\Controllers;

use App\Parkir;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class parkirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Parkir::all();
        return view('parkir.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parkir.add');
    }

    public function karcis()
    {
        $karcis = Parkir::get()->last();
        return view('parkir.karcis', compact('karcis'));
    }

    public function bayar(Parkir $parkir)
    {
        $date = time();
        $data = Parkir::findorfail($parkir->id);
        return view('parkir.bayar', compact('data', 'date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Parkir::create(['tiket' => $request->tiket]);
        return redirect('/parkir/karcis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parkir  $parkir
     * @return \Illuminate\Http\Response
     */
    public function show(Parkir $parkir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parkir  $parkir
     * @return \Illuminate\Http\Response
     */
    public function edit(Parkir $parkir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parkir  $parkir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parkir $parkir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parkir  $parkir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parkir $parkir)
    {
        //
    }
}
