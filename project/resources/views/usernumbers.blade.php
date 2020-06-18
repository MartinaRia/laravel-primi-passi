@extends('layouts.template')

@section('header-title')
  <h1>Numeri da {{$min}} a {{$max}}</h1>
@endsection


@section('main-content')

  <div class="numbers-display flex-container">
    @for ($i=$min; $i <= $max; $i++)

        <div class="number-container">
            {{$i}}
        </div>

    @endfor
    
  </div>
@endsection
