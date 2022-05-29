<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BankaResource;
use App\Models\Banka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class BankaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banke = Banka::all();
        return BankaResource::collection($banke);
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
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'sediste' => 'required|string',
            'broj_zaposlenih' => 'required|integer',
            'broj_filijala' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greška - Banka nije sačuvana', $validator->errors()]);
        }

        $banka = Banka::create([
            'naziv' => $request->naziv,
            'sediste' => $request->sediste,
            'broj_zaposlenih' => $request->broj_zaposlenih,
            'broj_filijala' => $request->broj_filijala,
        ]);

        return response()->json([
            'Banka je uspešno sačuvana', new BankaResource($banka)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banka  $banka
     * @return \Illuminate\Http\Response
     */
    public function show(Banka $banka)
    {
        return new BankaResource($banka);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banka  $banka
     * @return \Illuminate\Http\Response
     */
    public function edit(Banka $banka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banka  $banka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banka $banka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banka  $banka
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banka $banka)
    {
        $banka->delete();
        return response()->json([
            'Poruka' => 'Banka je uspešno obrisana'
        ]);
    }
}
