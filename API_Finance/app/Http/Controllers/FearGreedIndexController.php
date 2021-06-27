<?php

namespace App\Http\Controllers;
use DOMDocument;
use Illuminate\Http\Request;
use App\Library\helper; /** CUSTOM SMALL FUNCTIONS */

class FearGreedIndexController extends Controller
{

    /** PERMET DE RECUPERER LE FEAR GREED INDEX **/
    public function getFearGreedIndex() {
        error_reporting(0);
        $page = file_get_contents('https://money.cnn.com/data/fear-and-greed/');
        $doc = new DOMDocument();
        $doc->loadHTML($page);

        // trouver la div ou on à notre image
        $node = $doc->getElementById('needleChart');
        $fear_greed_index_trash = $doc->saveHtml($node);

        $picture = new helper();
        $result = $picture::get_string_between($fear_greed_index_trash, 'http', 'png');

        // On affiche donc le fear greed index
        return "<img src='http".$result."png'></img>";

    }


}
