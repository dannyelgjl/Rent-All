<?php
include 'conexao.php';
include 'header.php';
?>


    <title>Cadastro</title>


<body>
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h3 class="card-title text-center">Cadastro</h3>
                        <form class="form-signin" id="idDoForm" method="post" action="salvarbanco.php">
                            <div class="form-label-group">
                                <label for="nome">Usuario</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Login" required autofocus>

                            </div>
                            <div class="form-label-group">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-label-group">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" name="senha" class="form-control" placeholder="Password" required>

                            </div>
                            <div class="form-label-group">
                                <label for="senha1">Confirme a senha</label>
                                <input type="password" id="senha1" name="senha1" class="form-control" placeholder="Password" required>

                            </div>
                            <br>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" onclick="validarSenha()">Logar</button>
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function validarSenha() {
            formulario = document.getElementById("idDoForm")
            if ((document.getElementById('senha').value) != (document.getElementById('senha1').value)) {
                alert('Senhas diferentes por favor corrija!');
                formulario.onsubmit = function() {
                    return false;
                }
            } else {
                formulario.onsubmit = function() {
                    return true;
                }
            }
        }
    </script>
</body>

</html>