<?php 
include 'inc/simple_html_dom.php';
$html = file_get_html('http://www.nbp.pl/home.aspx?f=/kursy/kursya.html');

// Zmienna przetrzymująca liczbę wpisana przez uzytkownika
if (isset($_POST['liczba'])){
    $Pli =  $_POST['liczba'];
    if(is_numeric($_POST['liczba'])) {
        $Pli =  $_POST['liczba'];
    } elseif (! is_numeric($_POST['liczba'])) { 
        echo '<p class="text-danger bg-danger">**Wartość podana nie jest wartoscią numeryczną. Prosze wprowadzić poprawne dane.</p>';
    } else {
        null;
    }
} else{
    echo '';
}

// Zmienne kursów walut
$anglia_pobierz = $html->find('table.pad5 tbody tr td', 32)->innertext;
$anglia_wynik = str_replace(',', '.', $anglia_pobierz);
$anglia_kurs = (float)$anglia_wynik;

$australia_pobierz = $html->find('table.pad5 tbody tr td', 8)->innertext;
$australia_wynik = str_replace(',', '.', $australia_pobierz);
$australia_kurs = (float)$australia_wynik;


$brazylia_pobierz = $html->find('table.pad5 tbody tr td',83)->innertext;
$brazylia_wynik = str_replace(',', '.', $brazylia_pobierz);
$brazylia_kurs = (float)$brazylia_wynik;


$chiny_pobierz = $html->find('table.pad5 tbody tr td',101)->innertext;
$chiny_wynik = str_replace(',', '.', $chiny_pobierz);
$chiny_kurs = (float)$chiny_wynik;


$chorwacja_pobierz = $html->find('table.pad5 tbody tr td',56)->innertext;
$chorwacja_wynik = str_replace(',', '.', $chorwacja_pobierz);
$chorwacja_kurs = (float)$chorwacja_wynik;


$czechy_pobierz = $html->find('table.pad5 tbody tr td',41)->innertext;
$czechy_wynik = str_replace(',', '.', $czechy_pobierz);
$czechy_kurs = (float)$czechy_wynik;


$dania_pobierz = $html->find('table.pad5 tbody tr td',44)->innertext;
$dania_wynik = str_replace(',', '.', $dania_pobierz);
$dania_kurs = (float)$dania_wynik;


$euro_pobierz = $html->find('table.pad5 tbody tr td',23)->innertext;
$euro_wynik = str_replace(',', '.', $euro_pobierz);
$euro_kurs = (float)$euro_wynik;


$indonezja_pobierz = $html->find('table.pad5 tbody tr td',92)->innertext;
$indonezja_wynik = str_replace(',', '.', $indonezja_pobierz);
$indonezja_kurs = (float)$indonezja_wynik;


$japonia_pobierz = $html->find('table.pad5 tbody tr td',38)->innertext;
$japonia_wynik = str_replace(',', '.', $japonia_pobierz);
$japonia_kurs = (float)$japonia_wynik;


$kanada_pobierz = $html->find('table.pad5 tbody tr td',14)->innertext;
$kanada_wynik = str_replace(',', '.', $kanada_pobierz);
$kanada_kurs = (float)$kanada_wynik;


$meksyk_pobierz = $html->find('table.pad5 tbody tr td',77)->innertext;
$meksyk_wynik = str_replace(',', '.', $meksyk_pobierz);
$meksyk_kurs = (float)$meksyk_wynik;


$norwegia_pobierz = $html->find('table.pad5 tbody tr td',50)->innertext;
$norwegia_wynik = str_replace(',', '.', $norwegia_pobierz);
$norwegia_kurs = (float)$norwegia_wynik;


$rosja_pobierz = $html->find('table.pad5 tbody tr td',89)->innertext;
$rosja_wynik = str_replace(',', '.', $rosja_pobierz);
$rosja_kurs = (float)$rosja_wynik;


$rpa_pobierz = $html->find('table.pad5 tbody tr td',80)->innertext;
$rpa_wynik = str_replace(',', '.', $rpa_pobierz);
$rpa_kurs = (float)$rpa_wynik;


$szwajcaria_pobierz = $html->find('table.pad5 tbody tr td',29)->innertext;
$szwajcaria_wynik = str_replace(',', '.', $szwajcaria_pobierz);
$szwajcaria_kurs = (float)$szwajcaria_wynik;


$szwecja_pobierz = $html->find('table.pad5 tbody tr td',53)->innertext;
$szwecja_wynik = str_replace(',', '.', $szwecja_pobierz);
$szwecja_kurs = (float)$szwecja_wynik;


$tajlandia_pobierz = $html->find('table.pad5 tbody tr td',2)->innertext;
$tajlandia_wynik = str_replace(',', '.', $tajlandia_pobierz);
$tajlandia_kurs = (float)$tajlandia_wynik;


$turcja_pobierz = $html->find('table.pad5 tbody tr td',65)->innertext;
$turcja_wynik = str_replace(',', '.', $turcja_pobierz);
$turcja_kurs = (float)$turcja_wynik;


$ukraina_pobierz = $html->find('table.pad5 tbody tr td',35)->innertext;
$ukraina_wynik = str_replace(',', '.', $ukraina_pobierz);
$ukraina_kurs = (float)$ukraina_wynik;


$usa_pobierz = $html->find('table.pad5 tbody tr td',5)->innertext;
$usa_wynik = str_replace(',', '.', $usa_pobierz);
$usa_kurs = (float)$usa_wynik;


$wegry_pobierz = $html->find('table.pad5 tbody tr td',26)->innertext;
$wegry_wynik = str_replace(',', '.', $wegry_pobierz);
$wegry_kurs = (float)$wegry_wynik;

// zmienne obrazków
 $anglia_img = '<img src="img/england.png" alt="Anglia">';
 $anglia_imgB = '<img src="img/img/anglia.jpg" alt="Anglia">';
 $australia_img = '<img src="img/australia.png" alt="Australia">';
 $australia_imgB = '<img src="img/img/australia.jpg" alt="Australia">';
 $brazylia_img = '<img src="img/brazylia.png" alt="Brazylia">';
 $brazylia_imgB = '<img src="img/img/brazylia.jpg" alt="Brazylia">';
 $chiny_img = '<img src="img/chiny.png" alt="Chiny">';
 $chiny_imgB = '<img src="img/img/chiny.jpg" alt="Chiny">';
 $chorwacja_img = '<img src="img/slowacja.png" alt="Chorwacja">';
 $chorwacja_imgB = '<img src="img/img/chorwacja.jpg" alt="Chorwacja">';
 $czechy_img = '<img src="img/czechy.png" alt="Czechy">';
 $czechy_imgB = '<img src="img/img/czechy.jpg" alt="Czechy">';
 $dania_img = '<img src="img/dania.png" alt="Dania">';
 $dania_imgB = '<img src="img/img/dania.jpg" alt="Dania">';
 $euro_img = '<img src="img/euro.png" alt="Euro">';
 $euro_imgB = '<img src="img/img/euro.jpg" alt="Euro">';
 $indonezja_img = '<img src="img/indonezja.png" alt="Indonezja">';
 $indonezja_imgB = '<img src="img/img/indonezja.jpg" alt="Indonezja">';
 $japonia_img = '<img src="img/japonia.png" alt="Japonia">';
 $japonia_imgB = '<img src="img/img/japonia.jpg" alt="Japonia">';
 $kanada_img = '<img src="img/kanada.png" alt="kanada">';
 $kanada_imgB = '<img src="img/img/kanada.jpg" alt="kanada">';
 $meksyk_img = '<img src="img/meksyk.png" alt="Meksyk">';
 $meksyk_imgB = '<img src="img/img/meksyk.jpg" alt="Meksyk">';
 $norwegia_img = '<img src="img/norwegia.png" alt="Norwegia">';
 $norwegia_imgB = '<img src="img/img/norwegia.jpg" alt="Norwegia">';
 $rosja_img = '<img src="img/rosja.png" alt="Rosja">';
 $rosja_imgB = '<img src="img/img/rosja.jpg" alt="Rosja">';
 $rpa_img = '<img src="img/rpa.png" alt="RPA">';
 $rpa_imgB = '<img src="img/img/rpa.jpg" alt="RPA">';
 $szwajcaria_img = '<img src="img/szwajcaria.png" alt="Szwajcaria">';
 $szwajcaria_imgB = '<img src="img/img/szwajcaria.jpg" alt="Szwajcaria">';
 $szwecja_img = '<img src="img/szwecja.png" alt="Szwecja">';
 $szwecja_imgB = '<img src="img/img/szwecja.jpg" alt="Szwecja">';
 $tajlandia_img = '<img src="img/tajlandia.png" alt="Tajlandia">';
 $tajlandia_imgB = '<img src="img/img/tajlandia.jpg" alt="Tajlandia">';
 $turcja_img = '<img src="img/turcja.png" alt="Turcja">';
 $turcja_imgB = '<img src="img/img/turcja.jpg" alt="Turcja">';
 $ukraina_img = '<img src="img/ukraina.png" alt="Ukraina">';
 $ukraina_imgB = '<img src="img/img/ukraina.jpg" alt="Ukraina">';
 $usa_img = '<img src="img/usa.png" alt="USA">';
 $usa_imgB = '<img src="img/img/usa.jpg" alt="USA">';
 $wegry_img = '<img src="img/wegry.png" alt="Węgry">';
 $wegry_imgB = '<img src="img/img/wegry.jpg" alt="Węgry">';

?>