@extends('layouts.layout')

@section('main')

<div class="centrale">

    <form  action=" " method="post">
            @csrf
            @method('POST')

            <label for="nome"> NOME</label>
            <input type="text" name="nome" value="{{ $cagnolino['nome'] }}">

            <label for="cognome"> COGNOME</label>
            <input type="text" name="cognome" value="{{ $cagnolino['cognome'] }}">

            <label for="address"> ADDRESS</label>
            <input type="text" name="address" value="{{ $cagnolino['address'] }}">

            <label for="code"> CODE</label>
            <input type="text" name="code" value="{{ $cagnolino['code'] }}">

            <label for="state"> STATE</label>
            <input type="text" name="state" value="{{ $cagnolino['state'] }}">

            <label for="phone_number"> PHONE_NUMBER</label>
            <input type="text" name="phone_number" value="{{ $cagnolino['phone_number'] }}">

            <label for="role"> ROLE</label>
            <input type="text" name="role" value="{{ $cagnolino['role'] }}">


    </form>

</div>



@endsection
