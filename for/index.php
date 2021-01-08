<!Doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="Description" content="Descrição da Página" />
    <meta name="keywords" content="Palavras chaves da página" />
    <meta name="author" content="Romulo de Oliveira Azevedo" />
    <link rel="stylesheet" type="text/css" href="../nome do arquivo ou pasta" />
    <title>Página de Desenvolvimento</title>
    <style>
    </style>
    </head>
<body>
  
<div>
    <div>
        <header>
            <div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>                    
                    </ul>               
                </nav>           
            </div>
        </header>
    </div>
</div>
<section>
    <h1>Ok</h1>

<?php
echo "Este campo entra o código PHP.";


?>

<form action="" method="get">
    <select name="num">
    <?php
        for($i = 1; $i<= 20; $i++){
            echo "<option>$i</option>";
        }
    ?>


    </select>
    <input type="submit" value="Enviar" />

    <hr>

    <?php
        $m = isset($_GET['num'])?$_GET['num']:1;
        for($c = 1; $c <= 10; $c++){
                $resultado = $m * $c;
                echo "$m x $c = $resultado"."<br/>";

        }
    ?>

    <hr>
    <p>Outro PHP</p>
<?php
    $l = 1;
    while($l <= 12){
        echo "$l";
        $l++;
}
echo "</br>";
$i = 1; 
for($c = $i; $c <= 12; $c++){
    $resultado = $i * $c;
    echo $resultado;
}

?>

</form>

</section>
<article>



</article>
<aside>


</aside>
<footer>


</footer>
</body>
</html>