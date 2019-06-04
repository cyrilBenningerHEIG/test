<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vin;
use App\regn;
use App\produ;
use App\type;
use App\pays;
use App\frmt;

class productPageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vins = Vin::all();
        $regions = Regn::all();
        $produs = Produ::all();
        $types = Type::all();
        $pays = Pays::all();
        $frmts = Frmt::all();

        return view('productPage', [
            'vins' => $vins,
            'regions' => $regions,
            'produs' => $produs,
            'types' => $types,
            'pays' => $pays,
            'frmts' => $frmts,
        ]);
    }
}
