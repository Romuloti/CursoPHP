<!Doctype html>
<html lang="pt-br">
    <head>
       <meta charset="utf-8" />
       <meta name="Description" content="Descrição dos exercícios" />
       <meta name="Keywords" content="Curso de PHP, Curso de formulários e" />
       <meta name="author" content="Romulo de Oliveira Azevedo" />
       <link rel="stylesheet" type="text/css" href="css/normalize" />
       <link rel="stylesheet" type="text/css" href="estilo.css" />
       <link rel="stylesheet" type="text/css" href="https://www.googlefontes.com.br" />
       <title>Projeto Digitado</title>       
                    <?php              

                    $texto   =  isset($_POST["t"])?$_POST["t"]  : "texto Generico";
                    $tamanho =  isset($_POST["tam"])?$_POST["tam"]: "10pt";
                    $cor     =  isset($_POST["cor"])?$_POST["cor"]: "#000f";
                    ?>
    </head>    
    <style>  
            span.text {
                font-size: <?php echo $tamanho; ?>;
                color: <?php echo $cor; ?>;                                
            }            
    </style>
<body>
            <?php   

            echo "<span class='text'>$texto</span>";  

            ?>
    <div>
    <p>
    <a href="index.php">Voltar</a>
    </p>
    </div>
    
</body>
</html>