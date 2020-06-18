<?php

namespace App\Http\Controllers;
use App\Cagnolino;
use Illuminate\Http\Request;


class CagnoliniController extends Controller
{
    public function index(){

        $cagnolini = Cagnolino::all();
        return view("home", compact("cagnolini"));
    }
}
