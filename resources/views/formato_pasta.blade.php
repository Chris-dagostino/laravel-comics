@extends('layouts.base')

@section('pageTitle', $formato['titolo'])

@section('content')


    <div class="formato">
        <div class="container">

            <h1>{{$formato['titolo']}}</h1>

            <img src="{{$formato['src-h']}}" alt="{{$formato['titolo']}}">

            <img src="{{$formato['src-p']}}" alt="{{$formato['titolo']}}">

            <div class='descrizione'>
                {!! $formato['descrizione'] !!}
            </div>

        </div>
    </div>


@endsection