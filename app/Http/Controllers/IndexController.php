<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vin;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vins = Vin::inRandomOrder()->take(5)->get();

        return view('index', [
            'vins' => $vins,
        ]);
    }
}
