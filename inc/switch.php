<?php
if(! isset($_POST['przelicz'])){
     null;
} else {
 switch($_POST['przelicz']){
     
     case "anglia":
         $anglia = $anglia_kurs * $Pli;
         echo '<div class="wynik_switch">' . $anglia_imgB . '<h2>' . round($anglia, 2) . 'zł</h2></div>';
         break;
     case "australia":
         $australia = $australia_kurs * $Pli;
         echo '<div class="wynik_switch">' . $australia_imgB . '<h2>' . round($australia, 2) . 'zł</h2></div>';
         break;
     case "brazylia":
         $brazylia = $brazylia_kurs * $Pli;
         echo '<div class="wynik_switch">' . $brazylia_imgB . '<h2>' . round($brazylia, 2) . 'zł</h2></div>';
         break;
     case "chiny":
         $chiny = $chiny_kurs * $Pli;
         echo '<div class="wynik_switch">' . $chiny_imgB . '<h2>' . round($chiny, 2) . 'zł</h2></div>';
         break;
     case "chorwacja":
         $chorwacja = $chorwacja_kurs * $Pli;
         echo '<div class="wynik_switch">' . $chorwacja_imgB . '<h2>' . round($chorwacja, 2) . 'zł</h2></div>';
         break;
     case "czechy":
         $czechy = $czechy_kurs * $Pli;
         echo '<div class="wynik_switch">' . $czechy_imgB . '<h2>' . round($czechy, 2) . 'zł</h2></div>';
         break;
     case "dania":
         $dania = $dania_kurs * $Pli;
         echo '<div class="wynik_switch">' . $dania_imgB . '<h2>' . round($dania, 2) . 'zł</h2></div>';
         break;
     case "euro":
         $euro = $euro_kurs * $Pli;
         echo '<div class="wynik_switch">' . $euro_imgB . '<h2>' . round($euro, 2) . 'zł</h2></div>';
         break;
    case "indonezja":
         $indonezja = $indonezja_kurs * $Pli;
         echo '<div class="wynik_switch">' . $indonezja_imgB . '<h2>' . round($indonezja, 2) . 'zł</h2></div>';
         break;
     case "japonia":
         $japonia = $japonia_kurs * $Pli;
         echo '<div class="wynik_switch">' . $japonia_imgB . '<h2>' . round($japonia, 2) . 'zł</h2></div>';
         break;
     case "kanada":
         $kanada = $kanada_kurs * $Pli;
         echo '<div class="wynik_switch">' . $kanada_imgB . '<h2>' . round($kanada, 2) . 'zł</h2></div>';
         break;
     case "meksyk":
         $meksyk = $meksyk_kurs * $Pli;
         echo '<div class="wynik_switch">' . $meksyk_imgB . '<h2>' . round($meksyk, 2) . 'zł</h2></div>';
         break;
    case "norwegia":
         $norwegia = $norwegia_kurs * $Pli;
         echo '<div class="wynik_switch">' . $norwegia_imgB . '<h2>' . round($norwegia, 2) . 'zł</h2></div>';
         break;
    case "rosja":
         $rosja = $rosja_kurs * $Pli;
         echo '<div class="wynik_switch">' . $rosja_imgB . '<h2>' . round($rosja, 2) . 'zł</h2></div>';
         break;
     case "rpa":
         $rpa = $rpa_kurs * $Pli;
         echo '<div class="wynik_switch">' . $rpa_imgB . '<h2>' . round($rpa, 2) . 'zł</h2></div>';
         break;
     case "szwajcaria":
         $szwajcaria = $szwajcaria_kurs * $Pli;
         echo '<div class="wynik_switch">' . $szwajcaria_imgB . '<h2>' . round($szwajcaria, 2) . 'zł</h2></div>';
         break;
     case "szwecja":
         $szwecja = $szwecja_kurs * $Pli;
         echo '<div class="wynik_switch">' . $szwecja_imgB . '<h2>' . round($szwecja, 2) . 'zł</h2></div>';
         break;
     case "tajlandia":
         $tajlandia = $tajlandia_kurs * $Pli;
         echo '<div class="wynik_switch">' . $tajlandia_imgB . '<h2>' . round($tajlandia, 2) . 'zł</h2></div>';
         break;
     case "turcja":
         $turcja = $turcja_kurs * $Pli;
         echo '<div class="wynik_switch">' . $turcja_imgB . '<h2>' . round($turcja, 2) . 'zł</h2></div>';
         break;
     case "ukraina":
         $ukraina = $ukraina_kurs * $Pli;
         echo '<div class="wynik_switch">' . $ukraina_imgB . '<h2>' . round($ukraina, 2) . 'zł</h2></div>';
         break;
     case "usa":
         $usa = $usa_kurs * $Pli;
         echo '<div class="wynik_switch">' . $usa_imgB . '<h2>' . round($usa, 2) . 'zł</h2></div>';
         break;
    case "wegry":
         $wegry = $wegry_kurs * $Pli;
         echo '<div class="wynik_switch">' . $wegry_imgB . '<h2>' . round($wegry, 2) . 'zł</h2></div>';
         break;  
     
 } 
}
?>