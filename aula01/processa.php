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
   
   $nome = $_POST["nome"];
   $sobre = $_POST["sob"];
   $idade = $_POST["numero"];
   $sexo = $_POST["sexo"];
   
   echo "Seu nome é $nome $sobre e vocè é $sexo e você nasceu em $idade. ";   
   
   ?>
    <div>
    <p></p>
    <a href="index.php">Voltar</a>
    </p>
    </div>
    
</body>
</html>