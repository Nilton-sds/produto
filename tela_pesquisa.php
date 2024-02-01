<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h4><center>Pesquisa de Produtos</center></h4>
        
        <form action="buscar_produto.php" method="post">
            <div class="form-group">
                <label for="nome">Digite o nome do produto:</label>
                <input type="text" class="form-control" id="nome" name="nome_produto" aria-describedby="emailHelp" placeholder="Digite o nome do produto" required>
            </div>

            <button type="submit" class="btn btn-primary">Buscar</button>

            <table class="table" id="resultTable">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Valor</th>
                    <th>Info adicional</th>
                    <th>Foto</th>
                    <th>Data Hora</th>
                </tr>
                <?php foreach($produto as $p): ?>
                    <tr>
                        <td><?= $p["codigo"]; ?></td>
                        <td><?= $p["nome_produto"]; ?></td>
                        <td><?= $p["categoria_produto"]; ?></td>
                        <td><?= $p["valor_produto"]; ?></td>
                        <td><?= $p["info"]; ?></td>
                        <td><?= $p["foto_produto"]; ?></td>
                        <td><?= $p["data_hora"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </form>
    </div>

    <script>
        function buscarProduto() {
            var input = document.getElementById("nome").value.toLowerCase();
            var table = document.getElementById("resultTable");
            var rows = table.getElementsByTagName("tr");

            for (var i = 1; i < rows.length; i++) {
                var nome_produto = rows[i].getElementsByTagName("td")[1].innerText.toLowerCase();
                if (nome_produto.includes(input)) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }
    </script>
</body>
</html>
