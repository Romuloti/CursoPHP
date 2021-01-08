<meta charset="utf-8" />
<form action="" method="GET">
<label>A</label>
<input type="number" name="dia" min="2" max="8" required/><br/><br/><br/>
<input type="submit" value="Verificar" />
</form>

<?php
    
    $valor = isset($_GET["dia"])?$_GET["dia"]:0;
    
    switch($valor){
        case 2:
            echo"Hoje é segunda-feira";
        break;

        case 3:
            echo"Hoje é terça-feira";
        break;

        case 4:
            echo"Hoje é Quarta-feira";
        break;

        case 5:
            echo"Hoje é Quinta-feira";
        break;

        case 6:
            echo"Hoje é Sexta-feira";
        break;

        case 7:
            echo"Hoje é Sabado e Domingo, dia de descançar. ";
        break;

        default:
        echo "Não foi passado nenhum dia da semana";

    }

    echo "";


?>




