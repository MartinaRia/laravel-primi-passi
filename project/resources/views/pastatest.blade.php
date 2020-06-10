@extends('layouts.template')

@section('header-title')
  <h1>Pasta Test</h1>
@endsection

@section('main-content')
  <h2>Lunga:</h2>
  <ul>
    @foreach ($corta as $card)
      <li>{{ $card['titolo'] }}</li>
    @endforeach
  </ul>
  <br>

  <h2>Corta:</h2>
  <ul>
    @foreach ($cortissima as $card)
      <li>{{ $card['titolo'] }}</li>
    @endforeach
  </ul>
  <br>

  <h2>Cortissima:</h2>
  <ul>
    @foreach ($lunga as $card)
      <li>{{ $card['titolo'] }}</li>
    @endforeach
  </ul>
  <br>

@endsection
