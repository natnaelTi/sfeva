<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::post('/locale', 'Controller@changelocale')->name('locale');

Route::post('/locale', function (Request $request) {
    $locale = $request->input('locale');

        if (in_array($locale, ['en', 'am'])) {
            $request->session()->put('locale', $locale);
        }

        return redirect()->back();
})->name('locale');

Route::get('/', function () {
    return view('index');
});
