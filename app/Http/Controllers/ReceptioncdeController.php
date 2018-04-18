<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receptioncde;
use App\Materiels;

class ReceptioncdeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        $nbProduitReceptionne = $r->nbProduitReceptionne;
        return view('receptioncde', compact('nbProduitReceptionne'));
    }

}
