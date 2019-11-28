<?php
session_start();
if (!(isset($_SESSION['logado']))) {
    echo "<script>alert('Sem Permissao')</script>";
    header("Refresh: 0;url = index.php");
}
include 'header.php';

include 'contador.php';

include 'conexao.php';

$crescente = $conn->query("SELECT * FROM produto ORDER BY preco ASC");

$decrescente = $conn->query("SELECT * FROM produto ORDER BY preco DESC");

?>


<title>Painel de Controle</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="formcadastro.php">Alugue</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="text-right">
                <a href="sair.php">Sair</a>
            </div>
        </div>
        </div>
    </nav>
    <div class="container">

        <div class="row">
            <div class="col text-center">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h2>Produtos Para Alugar</h2>
                    </li>
                </ul>

                <table class="table table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Quantidade</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if ($crescente) {
                            foreach ($crescente as $row) {
                                echo "<tr><td>" . $row['nome'];
                                echo "<td>" . 'R$ '. $row['preco'] . "<td>";
                                echo $row['estoque'] . "</td></tr>";
                            }
                        }
                        ?>

                    </tbody>
                </table>
                <a class="btn btn-light" href="formcadastro.php">Cadastrar Produto</a>
            </div>
                    
            </div>
        </div>
    </div>

</body>

</html>