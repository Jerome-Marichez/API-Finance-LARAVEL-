<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/** BACK TO HOME */
Route::get('/',function()
{
    return redirect('../');
});

/** FEAR GREED INDEX API ROUTE */
Route::get('feargreedindex','App\Http\Controllers\FearGreedIndexController@getFearGreedIndex');
Route::get('feargreedindex/{data}','App\Http\Controllers\FearGreedIndexController@getFearGreedIndex');

/** STOCK API ROUTE  */
Route::get('stocks','App\Http\Controllers\StocksController@index');
Route::get('stocks/{data}','App\Http\Controllers\StocksController@getStocks');



/** SENTIMENT ETORO ROUTE */
/** ERROR:
 * CANT ACESS SINCE REJECTED SHOULD LOOK FOR WEB SCRAPPING FROM A TRUE BROWSER
 * AND INJECT INFORMATION INTO THE DATABASE
 */
