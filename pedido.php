

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>
<body>
<?php  if(isset($_SESSION["email"])): ?>
    <h5> Olá, <?php echo $_SESSION["nome"]; ?> </h5>
   
    <h2> Escolha do pedido: </h2>
    <br>
    <div class="container">
     <form action="cadastro_pedido.php" method="POST">
     

     <div class="form-group'>
     <label for="exampleInputEmail1">Digite o produto:</label>
     <input type="text" class="form-control" id="nome_produto" name="nome_produto"aria-describedby="emailHelp" placeholder="Digite o produto">
     <label for="exampleInputEmail1">Quantidade:</label>
     <input type="number" class="form-control" id="qtd_produto" name="qtd_produto"  maxlength="10">
     <label for="exampleInputEmail1">Observação:</label>
     <input type="textarea" class="form-control" id="obs_produto" name="obs_produto">
     <label for="exampleInputEmail1">Valor do Produto:</label>
     <input type="textarea" class="form-control" id="preco_produto " name="preco_produto">

     <br><div>
     <button type="submit" class="btn btn-primary">Adicionar item</button></br>


       
 
       
       
       
        
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     
    
<?php else: ?>

    <div class="alert alert-danger">
Voce não esta logado no sistema. </div>   


<?php endif; ?>

    </form>
    </body>
</html>