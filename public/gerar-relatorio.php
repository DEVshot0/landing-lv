<?php
// Caminho completo do banco (ajuste se mover o arquivo)
$databasePath = '/home/hshot0/landing-page/database/database.sqlite';

try {
    $pdo = new PDO("sqlite:$databasePath");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta os dados
    $stmt = $pdo->query("SELECT nome, telefone, email, mensagem, created_at, updated_at FROM contatos");
    $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($registros)) {
        exit("Nenhum registro encontrado.");
    }

    // Monta conteúdo do arquivo .txt
    $conteudo = '';
    foreach ($registros as $linha) {
        $linhaFormatada = "Nome: {$linha['nome']} | Telefone: {$linha['telefone']} | Email: {$linha['email']} | Mensagem: {$linha['mensagem']} | Criado em: {$linha['created_at']} | Atualizado em: {$linha['updated_at']}";
        $conteudo .= $linhaFormatada . PHP_EOL;
    }

    // Nome do arquivo para download
    $nomeArquivo = 'relatorio_contatos_' . date('Y-m-d_H-i-s') . '.txt';

    // Força o download no navegador
    header('Content-Type: text/plain');
    header("Content-Disposition: attachment; filename=\"$nomeArquivo\"");
    header('Content-Length: ' . strlen($conteudo));
    echo $conteudo;
    exit;

} catch (Exception $e) {
    http_response_code(500);
    echo "Erro: " . $e->getMessage();
}
