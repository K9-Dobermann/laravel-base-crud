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
    public function show($id){

      $cagnolino = Cagnolino::findOrFail($id);
      return view("showCagnolino", compact("cagnolino"));
      }
      public function edit($id) {

          $cagnolino = Cagnolino::findOrFail($id);
          return view("newEdit", compact("cagnolino"));

      }
}
