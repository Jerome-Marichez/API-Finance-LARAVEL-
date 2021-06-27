<?php

namespace App\Http\Controllers;
use DOMDocument;
use Illuminate\Http\Request;
use App\Library\helper; /** CUSTOM SMALL FUNCTIONS */

class FearGreedIndexController extends Controller
{

    public function getFearGreedIndex() {
        error_reporting(0);
        $page = file_get_contents('https://money.cnn.com/data/fear-and-greed/');
        $doc = new DOMDocument();
        $doc->loadHTML($page);

        // look for the div where is the picture
        $node = $doc->getElementById('needleChart');
        $fear_greed_index_trash = $doc->saveHtml($node);

        $picture = new helper();
        $result = $picture::get_string_between($fear_greed_index_trash, 'http', 'png');

        $json_picture = base64_encode("<img src='http".$result."png'></img>");
        // Return Picture in JSON base encoded

        return response()->json(['picture'=>$json_picture],200);

    }


}
