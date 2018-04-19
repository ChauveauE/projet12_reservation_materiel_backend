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
            $reservation->save();
            return view('reservations', ['reservations'=>$reservation->fresh(), 'materiels'=>$materiels]);
        }else{
            $request->flash();
            return back()->withErrors(['La quantité disponible est inférieure à celle demandée !']);
        }
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, int $reservationId)
    {
        $reservation = Reservations::find($reservationId);
        if (is_null($reservation)) abort(404);
        $materiel = Materiels::find($reservation->materiels_id);
        $materiel->quantiteDispo+=$reservation->quantiteReserv;
        $materiel->save();
        $reservation->delete();
        return redirect()->route('materiels');
    }
}
