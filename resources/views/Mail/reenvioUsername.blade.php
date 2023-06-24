<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f6f6;
            color: #333333;
        }

        .container {
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333333;
        }

        p {
            margin-bottom: 20px;
        }

        .button{
            display: inline-block;
            background-color:orange;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
        }

        .secondary-button {
            display: inline-block;
            background-color:green;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reenvio de Nome de Usuário - SIGE-IPIAL</h1>
        <p>Olá,</p>
        <p>Conforme solicitado, estamos enviando novamente o seu nome de usuário para acesso ao SIGE-IPIAL:</p>
        <p>Nome de usuário: {{ $nome_usuario }}</p>
        <p><strong>Recomendamos que você mantenha suas credenciais em local seguro.</strong></p>
        <p>Se você também esqueceu sua senha e deseja recuperá-la, clique no botão abaixo:</p>
        <p>
            <a class="button" href="{{ $urlSenhaEsquecida }}">Recuperar Senha</a>
        </p>
        <p>Se você lembra sua senha e deseja acessar o sistema imediatamente, clique no botão abaixo:</p>
        <p>
            <a class="secondary-button" href="{{ $urlLogin }}">Acessar o Sistema</a>
        </p>
        <p>Obrigado,</p>
        <p>Equipe do Sistema de Gestão Escolar - IPIAL</p>
    </div>
</body>
</html>
