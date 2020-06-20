@extends('layouts.layout')

@section('main')



<div class="centrale">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>

    <form  action="{{ route('update', $cagnolino['id']) }} " method="post">
            @csrf
            @method('POST')

            <label for="nome"> NOME</label>
            <input type="text" name="nome" value="{{ $cagnolino['nome'] }}">
            <br>

            <label for="cognome"> COGNOME</label>
            <input type="text" name="cognome" value="{{ $cagnolino['cognome'] }}">
            <br>

            <label for="address"> ADDRESS</label>
            <input type="text" name="address" value="{{ $cagnolino['address'] }}">
            <br>

            <label for="code"> CODE</label>
            <input type="text" name="code" value="{{ $cagnolino['code'] }}">
            <br>

            <label for="state"> STATE</label>
            <input type="text" name="state" value="{{ $cagnolino['state'] }}">
            <br>

            <label for="phone_number"> PHONE_NUMBER</label>
            <input type="text" name="phone_number" value="{{ $cagnolino['phone_number'] }}">
            <br>

            <label for="role"> ROLE</label>
            <input type="text" name="role" value="{{ $cagnolino['role'] }}">
            <br>
            <br>
            <input type="submit" name="submit" value="UPDATE">


    </form>

</div>



@endsection
