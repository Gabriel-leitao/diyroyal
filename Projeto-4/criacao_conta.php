<?php
// Incluir o arquivo config.php
include 'config.php';

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST["confirmar_senha"];

    // Encriptar a senha com Bcrypt
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Inserir novo usuário no banco de dados
        $insertQuery = "INSERT INTO usuario (nome, email, senha)
                        VALUES ('$nome', '$email', '$senhaHash')";

// Verificar se as senhas coincidem
    if ($senha !== $confirmar_senha) {
        echo "As senhas não coincidem.";
    } else {
        // Processar o registro do usuário (por exemplo, inserir os dados no banco de dados)
        // Aqui você pode adicionar código para inserir os dados no banco de dados ou realizar outras operações necessárias
        // Redirecionar o usuário para a tela de feed após o registro bem-sucedido
        header("Location: tela-feed.html");
        exit();
    }
}
?>
 