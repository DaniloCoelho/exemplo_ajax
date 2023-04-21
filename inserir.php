<?php
    require_once 'conexao.php';

    header('Content-Type: application/json');

    $name = $_POST['name'];
    $comment = $_POST['comment'];

   

    $stmt = $pdo->prepare('INSERT INTO comments (name, comment) VALUES (:na, :co)');
    $stmt->bindValue(':na', $name);
    $stmt->bindValue(':co', $comment);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo json_encode('Comentário Salvo com Sucesso');
        unset($_POST['name']);
        unset($_POST['comment']);
    } else {
        echo json_encode('Falha ao salvar comentário');
    }