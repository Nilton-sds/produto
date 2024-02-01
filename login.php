<?php

if(count($_POST) > 0) {
    $email = $_POST["email"];
    $senha = $_POST["senha1"];

    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        include("conexao_bd.php");

        // Prepare a consulta
        $consulta = $conn->prepare("SELECT * FROM usuario WHERE situacao='habilitado' AND email=:email AND senha1=md5(:senha)");
        $consulta->bindParam(':email', $email, PDO::PARAM_STR);
        $consulta->bindParam(':senha', $senha, PDO::PARAM_STR);

        // Executa a consulta
        $consulta->execute();

        // Obtém os resultados
        $usuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);

        // Verifica se encontrou um usuário
        if (count($usuarios) == 1) {
            $resultado['msg'] = "Usuário encontrado";
            $resultado['cod'] = 1;
            header("location: produto.php");
        } else {
            $resultado['msg'] = "E-mail e senha não conferem";
            $resultado['cod'] = 0;
        }
    } catch(PDOException $e) {
        echo "Erro ao consultar banco de dados: " . $e->getMessage();
        $resultado['msg'] = "Erro ao autenticar usuário";
        $resultado['cod'] = 0;
    }

    $conn = null;
}

include("index.php");

?>
