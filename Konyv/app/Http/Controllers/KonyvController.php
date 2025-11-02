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
      return konyvnyilv::with('szerzo','kategoria')->get();
    }


    public function byKategoria($id)
    { 
        return konyvnyilv::where('kategoriaid', $id)->with('szerzo','kategoria')->get(); 
    }

    public function bySzerzo($id)
    { 
        return konyvnyilv::where('szerzoid', $id)->with('szerzo','kategoria')->get(); 
    }

    public function elerheto()
    {
         return konyvnyilv::where('elerheto', 1)->with('szerzo','kategoria')->get(); 
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
        $validated = $request->validate([
        'cim' => 'required|string|max:255',
        'szerzoid' => 'required|integer|exists:szerzok,szerzoid',
        'kategoriaid' => 'required|integer|exists:kategoriak,kategoriaid',
        'kiado' => 'required|string|max:255',
        'kiadasev' => 'required|integer',
        'isbn' => 'required|string|max:20',
        'elerheto' => 'required|boolean'
         ]);
        return konyvnyilv::create($validated);
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
