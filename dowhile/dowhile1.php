<meta charset="">
    <form action="" method="">
        <label>A: </label>
        <input type="number" name="numero" />
        <button type="submit">Enviar</button>

    </form>


<?php

$valor = $_REQUEST["numero"]?$_REQUEST["numero"]:0;

do{
    print $valor." ";
    $valor++;
   // $valor = $valor + 1;    || $valor += 1;

}while($valor <= 10);




?>