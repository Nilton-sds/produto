<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Senha</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<h2>  </h2>

<body>
    <div class="container mt-5">
        <form action="cadastro_usuario.php" method="post">
            <div class="form-group">
                <label for="nome_usuario">Usuário:</label>
                <input type="text" class="form-control" id="nome" name="nome_usuario" aria-describedby="emailHelp" placeholder="Digite o nome do usuário" required>
            </div>
            <div class="form-group">
                <label for="email_usuario">Email:</label>
                <input type="email" class="form-control" id="email" name="email_usuario" aria-describedby="emailHelp" placeholder="Digite o email" required>
            </div>
            <div class="form-group">
                <label for="senha_usuario1">Senha:</label>
                <input type="password" class="form-control" id="senha1" name="senha1" placeholder="Digite a senha" required>
                <br>
                <label for="senha_usuario2">Confirme sua Senha:</label>
                <input type="password" class="form-control" id="senha2" name="senha2" placeholder="Digite a senha" required>
            </div>
            <button type="submit" class="btn btn-primary" >Criar Senha</button>
          
        </form>

       
    </div>
</body>
</html>
