<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Prontuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #666;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .logo {
            width: 500px;
            height: 500px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <img src="{{ asset('img/logo.jpg') }}" alt="Logo" class="logo">
    <h1>Sistema de Prontuário</h1>
    <p>Bem-vindo! Acesse o sistema para gerenciar os prontuários dos pacientes.</p>
    <a href="{{ route('login') }}" class="btn btn-primary">Acessar</a>
</div>
</body>
</html>
