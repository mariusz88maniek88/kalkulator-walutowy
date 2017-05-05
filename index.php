<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
               <h1>Kalkulator Walutowy</h1>
                <div class="col-xs-12 col-sm-6">
                    <form action="index.php" method="post">
                      <!-- Select1 -->
                       <div class="select1_css">
                           <h4>Wybierz walutę: </h4>
                            <select class="form-control input-md" name="przelicz" id="select1">
                                <option value="null">          </option>
                                <option value="anglia">Anglia(GPB)</option>
                                <option value="australia">Australia(AUD)</option>
                                <option value="brazylia">Brazylia(BRL)</option>
                                <option value="chiny">Chiny(CNY)</option>
                                <option value="chorwacja">Chorwacja(HRK)</option>
                                <option value="czechy">Czechy(CZK)</option>
                                <option value="dania">Dania(DKK)</option>
                                <option value="euro">Euro(EUR)</option>
                                <option value="indonezja">Indonezja(IDR)</option>
                                <option value="japonia">Japonia(JPY)</option>
                                <option value="kanada">Kanada(CAD)</option>
                                <option value="meksyk">Meksyk(MXN)</option>
                                <option value="norwegia">Norwegia(NOK)</option>
                                <option value="rosja">Rosja(RUB)</option>
                                <option value="rpa">RPA(ZAR)</option>
                                <option value="szwajcaria">Szwajcaria(CHF)</option>
                                <option value="szwecja">Szwecja(SEK)</option>
                                <option value="tajlandia">Tajlandia(THB)</option>
                                <option value="turcja">Turcja(TRY)</option> 
                                <option value="ukraina">Ukraina(UAH)</option> 
                                <option value="usa">USA(USD)</option>
                                <option value="wegry">Węgry(HUF)</option>     
                            </select>
                       </div>
                    
                        <div class="input_wartosc select1_css">
                           <h4>Wprowadż kwotę:</h4>
                            <input type="text" class="form-control" id="exampleInputAmount" name="liczba" placeholder="Wpisz kwotę">
                        </div>
                        <div class="select1_css">
                            <input class="btn btn-primary btn-lg" type="submit" value="Przelicz na PLN">
                        </div>
                    </form>
                    <div class="select1-css">
                        <h4> 
                         <?php require 'inc/variables.php'; ?>
                         <?php require 'inc/switch.php'; ?>     
                    </h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                   <div class="table_container navbar-right">
                       <p class="info_table">**Kursy walut są pobierane aktualnie na bieżąco dynamiczne ze strony <a href="http://www.nbp.pl/home.aspx?f=/kursy/kursya.html" target="_blank">Narodowego Banku Polskiego</a></p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>Kraj</td>
                                    <td>Waluta</td>
                                    <td>Średni Kurs</td>
                                </tr>
                            </thead>
                            <tbody> 
                                <tr>
                                    <td><?php echo $anglia_img; ?>Anglia</td>
                                    <td>funt brytyjski(GBP)</td>
                                    <td><?php echo $anglia_kurs; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><?php echo $australia_img; ?>Australia</td>
                                    <td>dolar australijski(AUD)</td>
                                    <td><?php echo $australia_kurs; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><?php echo $brazylia_img; ?>Brazylia</td>
                                    <td>real brazylijski(BRL)</td>
                                    <td><?php echo $brazylia_kurs; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><?php echo $chiny_img; ?>Chiny</td>
                                    <td>juan chiński(CNY)</td>
                                    <td><?php echo $chiny_kurs; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><?php echo $chorwacja_img; ?>Chorwacja</td>
                                    <td>kuna chorwacka(HRK)</td>
                                    <td><?php echo $chorwacja_kurs; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><?php echo $czechy_img; ?>Czechy</td>
                                    <td>korona czeska(CZK)</td>
                                    <td><?php echo $czechy_kurs; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><?php echo $dania_img; ?>Dania</td>
                                    <td>korona duńska(DKK)</td>
                                    <td><?php echo $dania_kurs; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><?php echo $euro_img; ?>Euro</td>
                                    <td>euro(EUR)</td>
                                    <td><?php echo $euro_kurs; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><?php echo $indonezja_img; ?>Indonezja</td>
                                    <td>rupia indonezyjska(IDR)</td>
                                    <td><?php echo $indonezja_kurs; ?></td>
                                </tr>
                                   
                                <tr>
                                    <td><?php echo $japonia_img; ?>Japonia</td>
                                    <td>jen japoński(JPY)</td>
                                    <td><?php echo $japonia_kurs; ?></td>
                                </tr>
                                   
                                <tr>
                                    <td><?php echo $kanada_img; ?>Kanada</td>
                                    <td>dolar kanadyjski(CAD)</td>
                                    <td><?php echo $kanada_kurs; ?></td>
                                </tr>
                                   
                                <tr>
                                    <td><?php echo $meksyk_img; ?>Meksyk</td>
                                    <td>peso meksykańskie(MXN)</td>
                                    <td><?php echo $meksyk_kurs; ?></td>
                                </tr>
                                   
                                <tr>
                                    <td><?php echo $norwegia_img; ?>Norwegia</td>
                                    <td>korona norweska(NOK)</td>
                                    <td><?php echo $norwegia_kurs; ?></td>
                                </tr>
                                   
                                <tr>
                                    <td><?php echo $rosja_img; ?>Rosja</td>
                                    <td>rubel rosyjski(RUB)</td>
                                    <td><?php echo $rosja_kurs; ?></td>
                                </tr>
                                   
                                <tr>
                                    <td><?php echo $rpa_img; ?>RPA</td>
                                    <td>rand południowoafrykański(ZAR)</td>
                                    <td><?php echo $rpa_kurs; ?></td>
                                </tr>
                                   
                                <tr>
                                    <td><?php echo $szwajcaria_img; ?>Szwajcaria</td>
                                    <td>frank szwajcarski(CHF)</td>
                                    <td><?php echo $szwajcaria_kurs; ?></td>
                                </tr>
                                   
                                <tr>
                                    <td><?php echo $szwecja_img; ?>Szwecja</td>
                                    <td>korona szwedzka(SEK)</td>
                                    <td><?php echo $szwecja_kurs; ?></td>
                                </tr>
                                   
                                <tr>
                                    <td><?php echo $tajlandia_img; ?>Tajlandia</td>
                                    <td>baht tajlandzki(THB)</td>
                                    <td><?php echo $tajlandia_kurs; ?></td>
                                </tr>
                                   
                                <tr>
                                    <td><?php echo $turcja_img; ?>Turcja</td>
                                    <td>lira turecka(TRY)</td>
                                    <td><?php echo $turcja_kurs; ?></td>
                                </tr>
                                   
                                <tr>
                                    <td><?php echo $ukraina_img; ?>Ukraina</td>
                                    <td>hrywna ukraińska(UAH)</td>
                                    <td><?php echo $ukraina_kurs; ?></td>
                                </tr>
                                   
                                <tr>
                                    <td><?php echo $usa_img; ?>USA</td>
                                    <td>dolar amerykański</td>
                                    <td><?php echo $usa_kurs; ?></td>
                                </tr>
                                   
                                <tr>
                                    <td><?php echo $wegry_img; ?>Węgry</td>
                                    <td>forint węgierski</td>
                                    <td><?php echo $wegry_kurs; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <footer></footer>
</body>
</html>