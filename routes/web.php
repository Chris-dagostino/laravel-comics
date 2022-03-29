<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/prodotti', function () {

    $formati = config('paste');
    // compact($formati) è uguale a ['formati' => $formati]
    return view('prodotti', compact('formati'));

})->name('prodotti');

Route::get('/dettagli_prodotto/{formato_id}', function($formato_id) {

    $formati = config('paste');

    if (is_numeric($formato_id) && $formato_id >= 0 && $formato_id < count($formati)) {
        $formatoPasta = $formati[$formato_id];
        return view('formato_pasta', ['formato' => $formatoPasta]);
    } else {
        abort(404, 'Formato non trovato!');
    }

})->name('formato');

Route::get('/novita', function () {
    return view('news');
})->name('news');