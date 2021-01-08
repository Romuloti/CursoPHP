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
    <div class="corpo">
        <div class="nav">
                <header>
                    <div class="barranav">
                        <nav>
                        </nav>
                    </div>
                </header>
        </div>
        <div class="secao">
            <section>
                <div class="">
                    <h1>Projeto Formulários</h1>
                    <div class="form">
                        <form method="post" action="processa.php">
                            <label>Nome: </label>
                            <input type="text" name="nome" placeholder="Digite o seu nome" /><br/>
                            <label>Sobrenome:</label>
                            <input type="text" name="sob" placeholder="Digite seu sobrenome" /><br/><br/>
                            <label>Idade</label>
                            <input type="number" name="numero" placeholder="Digite o ano de nascimento" />
                                
                            <fieldset><legend>Sexo</legend>
                                <input type="radio" name="sexo" id="masc" value="Homem" checked />
                                <label for="masc">Masculino</label><br/><br/>
                                <input type="radio" name="sexo" id="fem" value="Mulher"/>
                                <label for="fem">feminino</label>                          
                            
                                                          
                            </fieldset><br/><br/>
                            <input type="submit" value="Enviar"/>
                        </form>                       
                          
                    </div>
                </div>        
            </section> 
        </div>  
        <div class="article"></div>
            <article>          
                <div>    
                </div>          
            </article>        
        </div>
        <aside>          
            <div>                      
            </div>
        </aside>
        <footer>
            <div>                      
            </div>                    
        </footer>   
    </div>
</body>
</html>