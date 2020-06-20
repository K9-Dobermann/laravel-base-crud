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
      public function update(Request $request, $id) {

         // dd($request -> all());
         $validatedData = $request -> validate([
                 'nome' => 'required |alpha |min:1 | max:10',
                 'cognome' => 'required |alpha |min:1 | max:20',
                 'address' => 'required',
                 'code' => 'required',
                 'state' => 'required | alpha',
                 'phone_number' => 'required',
                 'role' => 'required',

 ]);

         $cagnolino = Cagnolino::findOrFail($id);

          $cagnolino -> nome = $validatedData['nome'];
          $cagnolino -> cognome = $validatedData['cognome'];
          $cagnolino -> address = $validatedData['address'];
          $cagnolino -> code = $validatedData['code'];
          $cagnolino -> state = $validatedData['state'];
          $cagnolino -> phone_number = $validatedData['phone_number'];
          $cagnolino -> role = $validatedData['role'];

          $cagnolino -> save();

          return redirect ()
          -> route('show', $id)
          -> withSuccess("Updated " .
          $cagnolino['name'] .
          " successfully!!!");


    }
    public function destroy($id) {
           $cagnolino = Cagnolino::findOrFail($id);
           $cagnolino -> delete();

           return redirect ()
           -> route('home')
           ->withSuccess(
           $cagnolino['name'] .
           " successfully eliminated");

    }
}
