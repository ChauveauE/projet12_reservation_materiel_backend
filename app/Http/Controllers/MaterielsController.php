<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materiels;

class MaterielsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiels = Materiels::all();
        return view('materiels', ['materiels' => $materiels]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $i=0;
        while (true){
            $name = "libelle".$i;
            $quantityName = "quantiteDispo".$i;
            if (is_null($request->$name)){
                break;
            }
            $materiel = new Materiels;
            $materiel->libelle=$request->$name;
            $materiel->quantiteDispo=$request->$quantityName;
            $materiel->save();
            $i++;
        }
        
        //return Materiels::find($materiel->id);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('materiel', ['materiel' => User::findOrFail($id)]);
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
        $id=$request->id;
        $materiel=Materiels::find($id);
        $libelle=$request->libelle;
        $materiel->libelle=$libelle;
        $quantiteDispo=$request->quantiteDispo;
        $materiel->quantiteDispo=$quantiteDispo;
        $materiel->save();
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
