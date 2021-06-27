<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DOMDocument;
use App\Library\helper; /** CUSTOM SMALL FUNCTIONS */

class StocksController extends Controller
{
    public function index()
    {
        return "not supported yet";
    }


    public function getStocks($data)
    {
        error_reporting(0);

        $page = file_get_contents('https://fr.finance.yahoo.com/quote/' . $data . '');
        $ID_Element = 'quote-header-info';
        $string1 = 'data-reactid="32">';
        $string2 = '</span>';

        $doc = new DOMDocument();
        $doc->loadHTML($page);

        // trouver la div ou on à notre prix de l'actif
        $node = $doc->getElementById($ID_Element);
        $actif_header = $doc->saveHtml($node);


        // Extraire le bon prix
        $good_price = new helper;
        $result = $good_price::get_string_between($actif_header, $string1, $string2);

        return $result;
    }
}
