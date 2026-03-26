<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato - Etec Zona Leste</title>
    <link rel="stylesheet" href="style.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #f4f4f4;
        }

        section {
            flex: 1; 
            background-color: white;
            margin: 30px auto; 
            padding: 40px;
            border-radius: 8px;
            max-width: 800px; 
            width: 90%;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1); 
            box-sizing: border-box;
            border-top: 8px solid #b00000;
        }

        input:not([type="submit"]) {
            width: 100%;
            max-width: 100%;
            box-sizing: border-box; 
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        input[type="submit"] {
            width: 150px; 
            cursor: pointer;
        }

        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: auto;
        }

        .logo-footer {
            width: 180px;
            margin-bottom: 10px;
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
    <h1>Contato</h1>
    <p>Preencha o formulário para entrar em contato com a escola.</p>

    <form action="processa.php" method="POST">
        <p>Nome:<br><input type="text" name="nome" required></p>
        <p>Endereço:<br><input type="text" name="endereco"></p>
        <p>Telefone:<br><input type="text" name="telefone"></p>
        <p>E-mail:<br><input type="email" name="email" required></p>

        <p class="btn-container">
            <input type="submit" value="Enviar">
        </p>
    </form>
</section>

<footer>
    <img src="imagens/etec_zona_leste.png" class="logo-footer" alt="Logo">
    <div class="footer-info">
        <p><strong>Etec Zona Leste</strong></p>
        <p>Av. Águia de Haia, 2633 - São Paulo/SP</p>
    </div>
</footer>

</body>
</html>
