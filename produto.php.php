
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produto</title>
    
    <!-- Adicione seus links de estilo aqui -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <div class="container">
        <?php
        if (isset($_GET["codigo"]) && $_GET["codigo"] > 0) {
            $codigo = $_GET["codigo"];
            include("selecionar_produto.php");
            //print_r($produto);

            
        }
        ?>


        
        <form action="cadastrar_produto.php" method="post"> 
            <br>
            <label for="codigo">Produtos:</label><br>
            <input type="text" required class="form-control" id="nome" name="nome_produto" aria-describedby="emailHelp" placeholder="Digite a categoria do produto">
            <br><br>
            <label for="categoria_produto">Categoria:</label><br>
            <input type="text" required class="form-control" id="categoria_produto" name="categoria_produto" aria-describedby="emailHelp" placeholder="Digite a categoria do produto">
            <br><br>
            <label for="valor_produto">Valor Unitário R$:</label><br>
            <input type="number" required class="form-control" id="valor_produto" name="valor_produto" aria-describedby="emailHelp">
            
            <div class="form-group">
                <br>
                <label for="foto_produto">Foto:</label><br>
                <input type="file" class="form-control" id="foto_produto" name="foto_produto">
            </div>

            <div class="form-group">
                <label for="info">Informações adicionais:</label><br>
                <textarea name="info" id="info" rows="4" cols="50"></textarea>
                <br>
                <button type="submit" class="btn btn-primary">Adicionar item</button>
            </div>
        </form>

        <!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
		<a href="gerar_planilha.php">Gerar Planilha</a>
	</body>
</html>

        <?php if (isset($resultado)): ?>
            <div class="alert <?= $resultado["style"] ?>">
                <?= $resultado["msg"] ?>
            </div>
        <?php endif; ?>
        
        <?php include("selecionar_produto.php"); ?>
   
        <?php if (count($produto) > 0): ?>
            <h4>Produtos Cadastrados:</h4>
            
            <table class="table">
                <tr>
                    <th>Codigo</th>
                   
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
                        <td>
                        <a class="btn btn-outline-warning btn-sm" onclick="return confirm('Alterar <?=$p['nome_produto'];?>');" href="produto_alterar.php?codigo=<?=$p['codigo']?>">Alterar</a>
                        <a class="btn btn-outline-danger btn-sm" onclick="return confirm('Excluir <?=$p['nome_produto'];?>');" href="remover_produto.php?codigo=<?=$p['codigo']?>">Excluir</a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
        <exit>
    </div>
</head>
<body>
    <!-- Adicione o conteúdo do corpo do HTML aqui -->
</body>
</html>
