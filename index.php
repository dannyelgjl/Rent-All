<?php
session_start();
include 'conexao.php';
include 'header.php';
?>

<title>Seja Bem-Vindo</title>
</header>


<body>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h3 class="card-title text-center">Entrar</h3>
                        <form class="form-signin" id="idDoForm" method="post" action="verificar.php">
                            <div class="form-label-group">
                                <label for="nome">Usuario</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Login" required autofocus>

                            </div>
                            <div class="form-label-group">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" name="senha" class="form-control" placeholder="Password" required>

                            </div>
                            <br>
                            <button class="btn btn-lg btn-dark btn-block text-uppercase" type="submit">Logar</button>
                            <br>
                            <a href="cadastro.php">Criar Conta</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>