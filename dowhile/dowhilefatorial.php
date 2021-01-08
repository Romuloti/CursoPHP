<meta charset="" />
<form action="" method="GET">
<label>Campo 1: </label>
<input type="number" name="numero" />
<button type="submit">Enviar</button>
<form>

<?php
    $item = isset($_REQUEST["numero"])?$_REQUEST["numero"]:0;

    echo "<h1>Calculando Fatorial de $item :</h1>";

    $c = $tem;
    $fat = 1;

    do{
        $fat = $fat ^ $c;              //           terminal o fatorial não está funcionando
        $c--;
    }while($c >= 1);


    echo "<h2>$item != $fat</h2>";

//terminal o fatorial não está funcionando

?>