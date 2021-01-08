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
   
   if($i >= 18){
       $vota = "Já pode votar";
       $dirigi = "Já pode dirigir";
       
   }else{
       $vota = "Não pode votar";
       $dirigi = "Não pode dirigir";
   }
   echo "Você $vota e $dirigi<br/><br/>";
   /*
   if($i < 16){
       $tipoVoto = "Não vota";
   }else{
       if(($i >= 16 && $i < 18) || ($i > 65)){    
          $tipoVoto = "Opcional";           
       }else{
           $tipoVoto = "Obrigatório";
       }
   }      
   echo "O voto é $tipoVoto";   
    *         if de cima é o de baixo com o elseif
    */     
   if($i < 16){
       $tipoVoto = "Não vota";
   }elseif(($i >= 16 && $i < 18) || ($i > 65)){    
          $tipoVoto = "Opcional";           
       }else{
           $tipoVoto = "Obrigatório";
       }
        
   echo "O voto é $tipoVoto";  
    
   ?>    

    <div>
    <p>
    <a href="index.php">Voltar</a>
    </p>
    </div>
    
</body>
</html>