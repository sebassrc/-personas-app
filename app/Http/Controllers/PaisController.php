<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = Pais::all();
        return view('pais.index', ['paises' => $paises]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $capitales = DB::table('tb_pais')
        ->orderBy('pais_capi')
        ->get();

        return view('pais.new', ['capitales' => $capitales]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pais = new Pais();

        $pais -> pais_codi = $request->id;
        $pais -> pais_nomb = $request->name;
        $pais -> pais_capi = $request->code;
        $pais -> save();

        $paises = Pais::all();
        return view('pais.index', ['paises' => $paises]);
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
        $pais = Pais::find($id);
        $capitales = DB::table('tb_pais')
        ->orderBy('pais_capi')
        ->get();

        return view('pais.edit', ['pais' => $pais, 'capitales' => $capitales]);
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
        $pais = Pais::find($id);

        $pais -> pais_nomb = $request->name;
        $pais -> pais_capi = $request->code;
        $pais -> save();

        $paises = Pais::all();
        return view('pais.index', ['paises' => $paises]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $pais = Pais::find($id);
        $pais->delete();

        $paises = Pais::all();
        return view('pais.index', ['paises' => $paises]);
    }
}