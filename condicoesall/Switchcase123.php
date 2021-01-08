<meta charset="utf-8" />
<form action="" method="GET">
<label>Dia da Semana</label>
<input type="number" name="dia" min="2" max="8" required/><br/><br/><br/>
<input type="submit" value="Verificar" />
</form>

<?php
    
    $valor = isset($_GET["dia"])?$_GET["dia"]:0;
    
    switch($valor){
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo"Dia de semana, bora estudar<br/>";
        break;

        case 7:
        case 8:
            echo"Final de semana<br/>";
        break;            

        default:
        echo "Não foi passado nenhum dia da semana<br/>";

    }

    echo "<br/>Relatório dia da semana! ";


?>