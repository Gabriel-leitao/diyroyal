<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de e-mail e senha foram enviados
    if (isset($_POST["email"]) && isset($_POST["senha"])) {
        // Captura os dados do formulário
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // Exibe os dados capturados
        echo "E-mail: " . $email . "<br>";
        echo "Senha: " . $senha;
    } else {
        // Caso algum dos campos não tenha sido enviado
        echo "Por favor, preencha todos os campos do formulário.";
    }
} else {
    // Caso o formulário não tenha sido enviado
    echo "O formulário não foi enviado.";
}
?>
