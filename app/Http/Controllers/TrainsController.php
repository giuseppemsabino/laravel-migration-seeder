<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index(){

        $trains= Train::orderBy('departure_time', 'asc')->get();
        // dd($trains);

        return view('index', compact('trains'));
    }
}
