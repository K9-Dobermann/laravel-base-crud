@extends('layouts.layout')

@section('main')


   <div class="centrale">

               <a href="{{ route('edit', $cagnolino['id']) }}">EDIT - FILE</a>
                <br>

               NOME: {{$cagnolino["nome"]}} <br>
               COGNOME: {{$cagnolino["cognome"]}} <br>
               ADDRESS: {{$cagnolino["address"]}} <br>
               CODE: {{$cagnolino["code"]}} <br>
               STATE: {{$cagnolino["state"]}} <br>
               PHONE_NUMBER: {{$cagnolino["phone_number"]}} <br>
               ROLE: {{$cagnolino["role"]}} <br>

     <a href="#">DELETE - ME</a>
            <br>


   </div>
 



@endsection
