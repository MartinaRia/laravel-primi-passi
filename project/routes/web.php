<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/pastatest', function () {

  $cards = config('pasta');
  // $collection = collect($cards);
  $collection = collect($cards) -> map(function($item, $key){
    $item['id'] = $key;
    return $item;
    });

  $lunga = $collection -> where('tipo', 'lunga');
  $corta = $collection -> where('tipo', 'corta');
  $cortissima = $collection -> where('tipo', 'cortissima');

  // dd($collection);  per vedere l'array

  //alternativa a questa
  // $lunga =[];
  // $corta = [];
  // $cortissima = [];
  //
  // foreach ($cards as $card) {
  //   if ($card['tipo'] === 'lunga') {
  //     $lunga[] = $card;
  //   } if ($card['tipo'] === 'corta') {
  //     $corta[] = $card;
  //   }if ($card['tipo'] === 'cortissima') {
  //     $cortissima[] = $card;
  //   }
  // }

    return view('pastatest', compact('lunga', 'corta', 'cortissima'));
})->name('pastatest');

Route::get('/pastalinks/{id}', function ($id) {

  $cards = config('pasta');
  $card = $cards[$id];

    return view('pastalinks', compact('card'));
})->name('pastalinks');

Route::get('/numbers10', function () {
  $min = 1;
  $max = 10;

    return view('numbers', compact('min', 'max'));
})->name('numbers');

Route::get('/numbers100', function () {
  $min = 1;
  $max = 100;

    return view('numbers', compact('min', 'max'));
})->name('numbers');

Route::get('/usernumbers/{num}', function ($num) {

  $min = 1;
  $max = $num;

    return view('usernumbers', compact('min', 'max'));
})->name('usernumbers');


// use Illuminate\Http\Request;
// Route::get('/usernumbers/{num}', function (Request $request, $num) {
//
//   dd($request->all());
//
//   $min = 1;
//   $max = $num;
//
//     return view('usernumbers', compact('min', 'max'));
// })->name('usernumbers');
