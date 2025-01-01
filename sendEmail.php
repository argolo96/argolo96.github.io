<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Configurações do e-mail
    $para = "argolo.m96@gmail.com"; // Seu email
    $assunto = "Novo Contato do Portfólio";

    // Corpo do e-mail
    $mensagem = "Nome: $nome\n";
    $mensagem .= "E-mail: $email\n";
    $mensagem .= "Telefone: $telefone\n";

    // Cabeçalhos para o envio do e-mail
    $cabecalhos = "From: $email\r\n";
    $cabecalhos .= "Reply-To: $email\r\n";

    // Envia o e-mail
    if (mail($para, $assunto, $mensagem, $cabecalhos)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
