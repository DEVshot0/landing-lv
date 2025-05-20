<?php
$databasePath = '/home/hshot0/landing-page/database/database.sqlite';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = json_decode(file_get_contents("php://input"), true);

    if ($dados && isset($dados['nome'], $dados['email'], $dados['mensagem'])) {
        try {
            $pdo = new PDO("sqlite:$databasePath");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare("INSERT INTO contatos (nome, telefone, email, mensagem, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([
                $dados['nome'],
                $dados['telefone'] ?? '',
                $dados['email'],
                $dados['mensagem'],
                date('Y-m-d H:i:s'),
            ]);

            echo json_encode(['success' => true]);
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'Dados incompletos.']);
    }

    exit;
}
?>
