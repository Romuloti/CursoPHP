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
                    <div class="">
                        <form method="post" action="processa.php">
                            <label for="itext">Texto: </label>
                            <input type="text" name="t" id="itext" placeholder="Digite o texto" maxlength="100" size="50"/><br/>
                            
                            <label for="itam">Tamanho:</label>  
                            <select name="tam" id="itam">
                                <option value="8pt">8</option>
                                <option value="10pt">10</option>
                                <option value="12pt">12</option>
                                <option value="14pt">14</option>
                                <option value="16pt">16</option>
                                <option value="18pt" selected>18</option>
                                <option value="20pt">20</option>        
                                <option value="40pt">40</option> 
                                
                            </select><br/><br/>
                            <label for="icor">Cor:</label><br/>
                            <input type="color" name="cor" id="icor" /> <br/><br/>
                            
                                       
                            <input type="submit" value="Gerar"/>
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