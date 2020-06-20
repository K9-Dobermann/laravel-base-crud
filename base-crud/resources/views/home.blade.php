@extends('layouts.layout')

@section('main')


    @foreach ($cagnolini as $cagnolino)
    
    <div class="spaziosingolo">
                NOME : <b> <a href="{{route('show', $cagnolino['id'])}}">{{$cagnolino['nome']}}</a></b>
                COGNOME : <b> <a href="{{route('show', $cagnolino['id'])}}">{{$cagnolino['cognome']}}</a></b> <br>

    </div>
    @endforeach


@endsection
