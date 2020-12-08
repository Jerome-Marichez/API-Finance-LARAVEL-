<?php
// Fonction Global
function get_string_between($string, $start, $end){
  $string = ' ' . $string;
  $ini = strpos($string, $start);
  if ($ini == 0) return '';
  $ini += strlen($start);
  $len = strpos($string, $end, $ini) - $ini;
  return substr($string, $ini, $len);
}
// Fin Fonction global


// YAHOO FINANCE API
function prix_actif_stock($value,$source = "yahoo"){

  if ($source == "yahoo") {
    $page = file_get_contents('https://fr.finance.yahoo.com/quote/'.$value.'');
    $ID_Element = 'quote-header-info';
    $string1 = 'data-reactid="32">';
    $string2 = '</span>';
  }

        $doc = new DOMDocument();
        $doc->loadHTML($page);

        // trouver la div ou on à notre prix de l'actif
        $node = $doc->getElementById($ID_Element);
        $actif_header = $doc->saveHtml($node);


        // Extraire le bon prix
        $prix_actif = get_string_between($actif_header, $string1,$string2);
        return $prix_actif;

}


echo "Apple: ";
echo prix_actif_stock('AAPL');
echo "<br>";
echo "DAX: ";
echo prix_actif_stock('%5EGDAXI?p=%5EGDAXI');
// FIN YAHOO FINANCE API


// Fonction IG US500 sentiment
function ig_sentiment(){

    $ig_page = file_get_contents('https://www.dailyfx.com/sentiment-report/');
    //echo $ig_page;


    preg_match_all('/<img[^>]+>/i',$ig_page, $result);



    $page_web = array2string($result);
    $rechercher_graphique_US500 = strpos($page_web, "US500");
    //echo $page_web;

    if($rechercher_graphique_US500 == TRUE)
    {
      $dom = new DOMDocument;
      $dom->loadHTML($page_web);
      foreach ($dom->getElementsByTagName('img') as $node)
      {
          $lien_image_graphique = "<img src='".$node->getAttribute("data-src")."'></img>"."\n";
          if($rechercher_graphique_US500 = strpos($lien_image_graphique, "US500"))
          {
            echo $lien_image_graphique;
          }
      }
      //echo $test;
    }

}
// Fin Fonction ig_sentiment



// Fonction fear greed index money.cnn.com, affiche une image fear greed index
function fear_greed_index_cnn(){
  $page = file_get_contents('https://money.cnn.com/data/fear-and-greed/');
  $doc = new DOMDocument();
  $doc->loadHTML($page);

  // trouver la div ou on à notre image
  $node = $doc->getElementById('needleChart');
  $fear_greed_index_trash = $doc->saveHtml($node);


  $parsed = get_string_between($fear_greed_index_trash, 'http', 'png');

  // On affiche donc le fear greed index
  echo "<img src='http"; echo $parsed; echo "png'></img>";

}
// Fin fonction fear greed index money.cnn.com


?>
