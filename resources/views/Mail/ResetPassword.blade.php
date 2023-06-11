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

        .button {
            display: inline-block;
            background-color: #4caf50;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Redefinição de Senha - SIGE-IPIAL</h1>
        <p>Olá,</p>
        <p>Você solicitou a redefinição de senha para acessar o Sistema de Gestão Escolar. Clique no botão abaixo para redefinir sua senha:</p>
        <p>
            <a class="button" href="{{ $resetUrl }}">Redefinir Senha</a>
        </p>
        <p>Se você não solicitou a redefinição de senha, pode ignorar este e-mail.</p>
        <p>Obrigado,</p>
        <p>Equipe do Sistema de Gestão Escolar - IPIAL</p>
    </div>
</body>
</html>
