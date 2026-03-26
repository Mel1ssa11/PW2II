<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mensagem Enviada - Etec Zona Leste</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .confirmacao-container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border-top: 8px solid #b00000;
            text-align: center;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .confirmacao-container h1 {
            margin-bottom: 15px;
            font-size: 2rem;
        }

        .confirmacao-container p {
            color: #555;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .email-destaque {
            color: #b00000;
            font-weight: bold;
            background: #fff5f5;
            padding: 2px 8px;
            border-radius: 4px;
        }

        .btn-retorno {
            display: inline-block;
            background-color: #b00000;
            color: white;
            padding: 15px 35px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            margin-top: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(176, 0, 0, 0.3);
        }

        .btn-retorno:hover {
            background-color: #800000;
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(176, 0, 0, 0.4);
        }
        
        /* Ajuste do Footer */
        footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
            background-color: #222;
            color: white;
            margin-top: auto;
        }
        
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .logo-footer {
            width: 180px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<nav class="nav-top">
    <img src="imagens/etec_zona_leste.png" class="logo" alt="Logo Etec">
    <h2>Etec Zona Leste</h2>
</nav>

<nav class="nav-menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cursos.php">Cursos</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="gestao.php">Gestão</a></li>
    </ul>
</nav>

<section>
    <div class="confirmacao-container">
        <h1>Mensagem Enviada!</h1>
        <p>Olá, <strong><?php echo $nome; ?></strong>.</p>
        <p>Agradecemos o seu contato. Nossa equipe analisará sua solicitação e enviará uma resposta para o e-mail:<br> 
           <span class="email-destaque"><?php echo $email; ?></span>
        </p>
        
        <a href="index.php" class="btn-retorno">Voltar para a Página Inicial</a>
    </div>
</section>

<footer>
    <img src="imagens/etec_zona_leste.png" class="logo-footer" alt="Logo">
    <div class="footer-info">
        <p><strong>Etec Zona Leste</strong></p>
        <p>Av. Águia de Haia, 2633 - Cidade Antônio Estêvão de Carvalho</p>
        <p>São Paulo/SP - CEP: 03694-000</p>
    </div>
</footer>

</body>
</html>
