<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class HomeControler extends Controller
{
    function daftar(){
        return view('page.daftar', ['Titel' => "Register Page"]);
    }
    function landingpage(){
        return view('page.landingpage', ['Titel' => "Landing Page"]);
    }
    public function marketplace(){
        $data = Obat::all();
        // dd($data);
        return view('page.marketplace', ['Titel' => "Market Place"])->with('data', $data);
    }
    function payment(){
        return view('page.democilin', ['Titel' => "Payment Page"]);
    }
    function paratusin(){
        return view('page.paratusin', ['Titel' => "Payment Page"]);
    }
    function paracetamol(){
        return view('page.paracetamol', ['Titel' => "Payment Page"]);
    }
    function antimigren(){
        return view('page.antimigren', ['Titel' => "Payment Page"]);
    }
}

