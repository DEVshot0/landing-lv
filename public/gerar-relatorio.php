<?php
define('SENHA_CORRETA', 'Reshs0004');

$senhaIncorreta = false;

// Verifica se foi enviada uma senha e se está errada
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['senha']) || $_POST['senha'] !== SENHA_CORRETA) {
        $senhaIncorreta = true;
    } else {
        $databasePath = '/home/hshot0/landing-page/database/database.sqlite';

        try {
            $pdo = new PDO("sqlite:$databasePath");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->query("SELECT nome, telefone, email, mensagem, created_at, updated_at FROM contatos");
            $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (empty($registros)) {
                exit("Nenhum registro encontrado.");
            }

            $conteudo = '';
            foreach ($registros as $linha) {
                $linhaFormatada = "Nome: {$linha['nome']} | Telefone: {$linha['telefone']} | Email: {$linha['email']} | Mensagem: {$linha['mensagem']} | Criado em: {$linha['created_at']} | Atualizado em: {$linha['updated_at']}";
                $conteudo .= $linhaFormatada . PHP_EOL;
            }

            $nomeArquivo = 'relatorio_contatos_' . date('Y-m-d_H-i-s') . '.txt';

            header('Content-Type: text/plain');
            header("Content-Disposition: attachment; filename=\"$nomeArquivo\"");
            header('Content-Length: ' . strlen($conteudo));
            echo $conteudo;
            exit;

        } catch (Exception $e) {
            http_response_code(500);
            echo "Erro: " . $e->getMessage();
        }
    }
}

// Exibe o formulário, com JS para erro se senha incorreta
?>
<!DOCTYPE html>
<html>
<head>
    <title>Autenticação</title>
    <?php if ($senhaIncorreta): ?>
    <script>
        alert("Senha incorreta!");
        window.close(); // Fecha a aba/janela atual
    </script>
    <?php endif; ?>
</head>
<body>
    <form method="POST">
        <h3>Autenticação necessária</h3>
        <label>Senha:</label><br>
        <input type="password" name="senha" required>
        <button type="submit">Acessar Relatório</button>
    </form>
</body>
</html>
