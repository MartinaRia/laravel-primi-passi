@extends('layouts.template')

@section('header-title')
  <h1>Numeri da {{$min}} a {{$max}}</h1>
@endsection


@section('main-content')

  <div class="numbers-display flex-container">
    @for ($i=$min; $i <= $max; $i++)
      @php
        $num = $i+20
      @endphp

        <div class="number-container">
          <a href=" {{ route('usernumbers', $num) }} ">
            {{$i}}
          </a>
        </div>

    @endfor
  </div>
@endsection
