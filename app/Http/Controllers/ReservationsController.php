<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservations;
use App\Materiels;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reservation = Reservations::all();
        return view('reservations',['reservation'=>$reservation]);
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
        $materiels=Materiels::find($request->materiels);
        $reservation = new Reservations();
        $reservation->date=$request->date;
        $reservation->quantiteReserv=$request->quantiteReserv;
        $reservation->idP=$request->idP;
        $reservation->materiels_id=$request->materiels;
        if ($this->aAssezQuantite($materiels, $request->quantiteReserv)){
            $this->majQuantiteDispo($materiels, $request->quantiteReserv);
            return view('reservations', ['reservations'=>$reservation, 'materiels'=>$materiels]);
        }else{
            $request->flash();
            return back()->withErrors(['La quantité disponible est inférieure à celle demandée !']);
        }
        $reservation->save();
    }

    private function majQuantiteDispo(Materiels $materiel, int $quantiteReserve)
    {
        $materiel->quantiteDispo-=$quantiteReserve;
        $materiel->save();
    }

    private function aAssezQuantite(Materiels $materiel, int $quantiteReserve): bool
    {
        return $materiel->quantiteDispo >= $quantiteReserve;
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
    public function destroy(Request $request, Reservations $reservation)
    {
        $reservation->delete();
        return redirect()->route('materiels');
    }
}
