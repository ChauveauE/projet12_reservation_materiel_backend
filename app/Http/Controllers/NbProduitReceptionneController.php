<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NbProduitReceptionne;

class NbProduitReceptionneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nbProduitReceptionne = null, Request $request)
    {
        $nbProduitReceptionne = $request->input("nbProduitReceptionne");
        return view('nbproduitreceptionne',['nbProduitReceptionne'=>$nbProduitReceptionne]);
    }
}
