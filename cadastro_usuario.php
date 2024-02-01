<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = isset($_POST["nome"]) ? trim($_POST["nome"]) : null;
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : null;
    $senha1 = isset($_POST["senha1"]) ? trim($_POST["senha1"]) : null;
    $senha2 = isset($_POST["senha2"]) ? trim($_POST["senha2"]) : null;

    try {
        include("conexao_bd.php");

        // Verificar se o email já está em uso
        $verificarEmail = $conn->prepare("SELECT * FROM usuario WHERE email = :email");
        $verificarEmail->bindParam(":email", $email);
        $verificarEmail->execute();

        if ($verificarEmail->rowCount() > 0) {
            // Email já em uso
            $resultado["msg"] = "Email já cadastrado. Por favor, escolha outro.";
            $resultado["cod"] = 0;
            $resultado["style"] = "alert-danger";
        } else {
            // Verificar se as senhas correspondem
            if ($senha1 !== $senha2) {
                $resultado["msg"] = "As senhas não correspondem. Por favor, verifique e tente novamente.";
                $resultado["cod"] = 0;
                $resultado["style"] = "alert-danger";
            } else {
                // Hash da senha usando Bcrypt
                $senha_hash = password_hash($senha1, PASSWORD_BCRYPT);

                // Inserir usuário no banco de dados
                $sql = "INSERT INTO usuario (nome, email, senha1, situacao) VALUES (?, ?, ?, 'habilitado')";
                $stmt = $conn->prepare($sql);

                // Adicionando mensagem de depuração
                var_dump([$nome, $email, $senha_hash]);

                $stmt->execute([$nome, $email, $senha_hash]);

                if ($stmt->rowCount() > 0) {
                    $resultado["msg"] = "Usuário cadastrado com sucesso!";
                    $resultado["cod"] = 1;
                    $resultado["style"] = "alert-success";
                } else {
                    $resultado["msg"] = "Erro ao cadastrar usuário. Por favor, tente novamente.";
                    $resultado["cod"] = 0;
                    $resultado["style"] = "alert-danger";
                }
            }
        }
    } catch (PDOException $e) {
        echo "Erro no banco de dados: " . $e->getMessage();
        $resultado["msg"] = "Erro ao cadastrar usuário. Por favor, tente novamente.";
        $resultado["cod"] = 0;
        $resultado["style"] = "alert-danger";
    }

    $conn = null;
    // Remova essa linha se não estiver redirecionando para tela_usuario.php
   
}

// Adicione este echo para verificar o resultado
echo json_encode($resultado);

?>
