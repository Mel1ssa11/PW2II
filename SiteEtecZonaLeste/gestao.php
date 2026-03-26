<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestão - Etec Zona Leste</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estrutura para o footer fixo */
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            border-radius: 12px;
            max-width: 1000px;
            width: 90%;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
            box-sizing: border-box;
            border-top: 8px solid #b00000;
        }

        h1 {
            color: #b00000;
            margin-top: 0;
            font-size: 2.2rem;
        }

        /* Estilização da Tabela Moderna */
        .tabela-gestao {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .tabela-gestao thead {
            background-color: #b00000;
            color: white;
            text-align: left;
        }

        .tabela-gestao th, 
        .tabela-gestao td {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
        }

        .tabela-gestao tbody tr:nth-of-type(even) {
            background-color: #fafafa;
        }

        .tabela-gestao tbody tr:last-of-type {
            border-bottom: 3px solid #b00000;
        }

        .tabela-gestao tbody tr:hover {
            background-color: #f1f1f1;
            transition: 0.3s;
        }

        .tabela-gestao strong {
            color: #b00000;
            font-size: 1.1rem;
        }

        .desc-setor {
            color: #555;
            line-height: 1.5;
        }

        /* Rodapé */
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
        <h1>Gestão Escolar</h1>
        <p>
            A gestão da Etec Zona Leste é responsável pela organização administrativa
            e pedagógica da instituição, garantindo o bom desenvolvimento educacional dos estudantes.
        </p>

        <table class="tabela-gestao">
            <thead>
                <tr>
                    <th>Setor</th>
                    <th>Atribuições e Responsabilidades</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Direção</strong></td>
                    <td class="desc-setor">Responsável pela gestão geral da escola, representando a instituição e garantindo o cumprimento das diretrizes educacionais e administrativas.</td>
                </tr>
                <tr>
                    <td><strong>Coordenação Pedagógica</strong></td>
                    <td class="desc-setor">Acompanha o processo de ensino-aprendizagem, oferece suporte aos professores e orienta os alunos para o sucesso acadêmico.</td>
                </tr>
                <tr>
                    <td><strong>Secretaria Acadêmica</strong></td>
                    <td class="desc-setor">Cuida da documentação escolar, matrículas, históricos, certificados e atendimento às demandas burocráticas de alunos e responsáveis.</td>
                </tr>
            </tbody>
        </table>
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
