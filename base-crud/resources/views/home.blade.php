@extends('layout')

@section('main')

<div class="main">
    hello world

    @foreach ($cagnolini as $cane)
        {{$cane['nome']}}

    @endforeach

</div>
@endsection
