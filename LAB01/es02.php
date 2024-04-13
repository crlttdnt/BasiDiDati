<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Basi di Dati | Laboratorio 1</title>
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="description" content="" />
        <link rel="icon" href="favicon.png">
    </head>

    <body>
        <style>

            body {
                color: white;
            }

            table, td, tr {
                border: 1px solid white;
                border-collapse: collapse;
                padding: 3px 5px;
                text-align: left;
                
                background-color: #618685;
	        }
        </style>

        <form method="POST" action="risultati.php">
            <table>
                <tr>
                    <th> Nome: </th>
                    <td> <input type="text" name="nome"> </td>
                </tr>
                <tr>
                    <th> Cognome: </th>
                    <td> <input type="text" name="cognome"> </td>
                </tr>
                <tr>
                    <th> Data di nascita: </th>
                    <td> 
                        <label for="cars"> giorno:</label>
                        <select name="giorno" id="giorno" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select> 

                        <label for="mese"> mese: </label>
                           <?php echo selectRange(1, 12, 'mese') ?> 
                        <label for="anno"> anno: </label>
                            <?php echo selectRange(1970, 2024, 'anno') ?> 
                    </td>
                </tr>

                <tr>
                    <th> Sesso: </th>
                    <td> <input type= "radio" name="sesso" value="maschio"> Maschio 
                        <input type= "radio" name="sesso" value="femmina"> Femmina 
                    </td>
                </tr>


                <tr>
                    <th> Attività: </th>
                    <td>
                        <input type= "checkbox" name="attivita[]" value="sci"> Sci <br>
                        <input type= "checkbox" name="attivita[]" value="tennis"> Tennis <br>
                        <input type= "checkbox" name="attivita[]" value="golf"> Golf <br>
                        <input type= "checkbox" name="attivita[]" value="canoa"> Canoa <br>
                        <input type= "checkbox" name="attivita[]" value="altro"> Altro <br>
                    </td>
                </tr>

                <tr>
                    <th> Condizioni di utilizzo:  </th>
                    <td>
                        <input style="width:97%" type="text" value="bla bla bla bla bla bla bla bla bla bla bla" disabled>
                        <br>
                        <input type="checkbox" id="condizioni" name="condizioni" value="Accetto">
                        <label for="condizioni">Accetto</label> <br>
                    </td>
                </tr>

                <tr> 
                <td colspan="2" style="text-align:center"> 
                    <input type="submit" value="Ok">
                    <input type="reset" value="Cancella">
                </td>
                </tr> 
            </table>
            
            
           
            
            
            
            
            
            
        </form>

    </body>

    <?php

        function selectRange($start, $end, $name) {
            $str = "<select name=$name id=$name>";
            for ($i = $start; $i <= $end; $i++) {
                $str .= "<option value=$i>$i</option>";
            }
            return $str . "</select>";
        }

    ?>
   

    

    </html>