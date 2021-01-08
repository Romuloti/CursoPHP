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
    $valor+=2;
  // $valor++;

}while($valor <= 10);




?>