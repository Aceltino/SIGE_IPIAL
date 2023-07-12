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
        <h1>Credenciais de Acesso - SIGE-IPIAL</h1>
        <p>Olá,</p>
        <p>Seu cadastro foi realizado com sucesso no SIGE-IPIAL. Abaixo estão suas credenciais de acesso:</p>
        <p><strong>Nome de usuário:</strong> {{ $nome_usuario }}</p>
        <p><strong>Senha:</strong> {{ $senha }}</p>
        <p><strong>Recomendamos que você altere sua senha assim que fizer o primeiro login.</strong></p>
        @if(isset($cargo))
        <p>Recomendamos também que você atualize o seu endereço assim que fizer o primeiro login.</p>
        <p><strong>A sua conta estará activa na seguinte data:</strong>  {{ !empty($dataMatri) ? $dataMatri : 'Hoje (' . date('d/m/Y') . ')' }}</p>
        @endif
        <p>Para acessar o sistema, clique no botão abaixo:</p>
        <p>
            <a class="button" href="{{ $urlLogin }}">Acessar o Sistema</a>
        </p>
      
        <p>Obrigado,</p>
        <p>Equipe do Sistema de Gestão Escolar - IPIAL</p>
    </div>
</body>
</html>
