@extends('layouts.layout')

@section('main')


    @foreach ($cagnolini as $cagnolino)
    <div class="spaziosingolo">
        NOME : <b> <a href="{{route('show', $cagnolino['id'])}}">{{$cagnolino['nome']}}</a></b> <br>
        COGNOME : <b> <a href="{{route('show', $cagnolino['id'])}}">{{$cagnolino['cognome']}}</a></b> <br>
        ADDRESS : <b> <a href="{{route('show', $cagnolino['id'])}}">{{$cagnolino['address']}}</a></b> <br>
        CODE : <b> <a href="{{route('show', $cagnolino['id'])}}">{{$cagnolino['code']}}</a></b> <br>
        STATE : <b> <a href="{{route('show', $cagnolino['id'])}}">{{$cagnolino['state']}}</a></b> <br>
        PHONE_NUMBER : <b> <a href="{{route('show', $cagnolino['id'])}}">{{$cagnolino['phone_number']}}</a></b> <br>
        ROLE : <b> <a href="{{route('show', $cagnolino['id'])}}">{{$cagnolino['role']}}</a></b> <br>
    </div>
    @endforeach


@endsection
