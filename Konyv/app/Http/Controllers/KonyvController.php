<?php

namespace App\Http\Controllers;

use App\Models\konyvnyilv;
use Illuminate\Http\Request;


class KonyvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $konyv = konyvnyilv::all();
        return response()->json($konyv);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konyv  $konyv
     * @return \Illuminate\Http\Response
     */
    public function show(konyvnyilv $konyv, int $id)
    {
        $konyv = konyvnyilv::find($id);
        $konyv = konyvnyilv::where("felhasznalo_id", $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konyv  $konyv
     * @return \Illuminate\Http\Response
     */
    public function edit(konyvnyilv $konyv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konyv  $konyv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, konyvnyilv $konyv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konyv  $konyv
     * @return \Illuminate\Http\Response
     */
    public function destroy(konyvnyilv $konyv)
    {
        //
    }
}
