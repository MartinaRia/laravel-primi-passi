@extends('layouts.template')

@section('header-title')
  <h1>{{ $card['titolo'] }}</h1>
@endsection

@section('main-content')
  <img class="pasta-img" src="{{ $card['src']}}" alt="">
  <p> {{ $card['descrizione'] }} </p>
@endsection
