<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DOMDocument;
use App\Library\helper;

/** CUSTOM SMALL FUNCTIONS */

class StocksController extends Controller
{
    public function index()
    {
        return "not supported yet";
    }


    public function getStocks($ticker)
    {
        error_reporting(0);

        // scraping stuff
        $page = file_get_contents('https://fr.finance.yahoo.com/quote/'.$ticker);
        $ID_Element = 'quote-header-info';
        $string1_price = 'data-reactid="32">';
        $string3_percentage = 'data-reactid="33">';
        $string2 = '</span>';

        $doc = new DOMDocument();
        $doc->loadHTML($page);

        //look for div where is the price
        $node = $doc->getElementById($ID_Element);
        $actif_header = $doc->saveHtml($node);


        // Split to grab only the price
        $helper = new helper;
        $result = $helper::get_string_between($actif_header, $string1_price, $string2);

        // Check if Tickers is accurate and found if not show error else resume operation and return details
        if (strlen($result) > 30) {
            return response()->json(['ticker' => $ticker, 'price' => '', 'percentage' => '', 'status' => 'Error bad ticket or not found'], 400);
        } else {
            // Only Split percentage if Tickers exists
            $full_percentage_details = $helper::get_string_between($actif_header, $string3_percentage, $string2);
            $percentage = $helper::get_string_between($full_percentage_details, "(", ")");

            return response()->json([
                'ticker' => $ticker,
                'price' => $result,
                'full_percentage_details' => $full_percentage_details,
                'percentage' => $percentage,
                'status' => 'success'
            ], 200);
        }
    }
}
