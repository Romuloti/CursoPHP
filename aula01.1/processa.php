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
   
   $nome = isset($_POST["nome"])?$_POST["nome"]:["Não informado"];
   $sobre = isset($_POST["sob"])?$_POST["sob"]:["Não informado"];
   $idade = isset($_POST["numero"])?$_POST["numero"]:["Não informado"];
   $sexo = isset($_POST["sexo"])? $_POST["sexo"]:["Não informado"];
   
   $ano = (is_null(date(Y))) - $idade;
   
   echo "Seu nome é $nome $sobre e vocè é $sexo e você nasceu em $idade e tem $ano de idade.";   
   
   ?>
    <div>
    <p>
    <a href="index.php">Voltar</a>
    </p>
    </div>
    
</body>
</html>