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
       <style>           
       </style>
    </head>
<body>
   <?php
   
   $a = $_POST["a"];
   $b = $_POST["b"];
   
    if($a>$b){
        $maior = $a;
    }else{
        $maior = $b;
    }  
    echo "O valor maior é $maior"
    
   ?>
    
    <?php
    /*
    
    if($idade >= 18 ){
        $vota = true;  
        $dirigir = true;
    }else{
        $vota = false;
        $dirigir = false;
    }      
    */
    ?>
    <div>
    <p></p>
    <a href="index.php">Voltar</a>
    </p>
    </div>
    
</body>
</html>