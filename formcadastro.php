<?php
    include 'header.php';

    include 'conexao.php';


?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">Cadastre Seu Produto</a>
        
    </div>
    </nav>    
    <div class="container">
    <form action="salvarproduto.php" method="post">
            <ul class="list-group">
                <li class="list-group-item"><input type="text" name="nome" placeholder="nome"></li>
                <li class="list-group-item"> <input type="text" name="preco" placeholder="preço"></li>
                <li class="list-group-item"><input type="text" name="estoque" placeholder="quantidade"></li>
            </ul>
                        
                <LI class="list-group-item"><input type="submit" class="btn btn-dark btn-block" value="Cadastrar"></LI>
                
            </form>
    </div>
    <div class="container">
    <br><a class="btn btn-light" href="paineldecontrole.php">Voltar</a>     
        
    </div>
          
