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
   
   
   $a = isset($_POST["numero"])?$_POST["numero"]: "1900";
   $i = date(Y) - $a;
   
   echo "Você nasceu em $a e tem $i anos de idade<br/><br/>"; 
   
   if($a >= 18){
       $vota = "Já pode votar";
       $dirigi = "Já pode dirigir";
       
   }else{
       $vota = "Não pode votar";
       $dirigi = "Não pode dirigir";
   }
   
   echo "O nosso colega $vota e $dirigi";
   
    
   ?>
    
    

    <div>
    <p>
    <a href="index.php">Voltar</a>
    </p>
    </div>
    
</body>
</html>