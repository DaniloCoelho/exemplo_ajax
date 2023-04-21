<?php
    
    require_once 'conexao.php';
    
    header('Content-Type: application/json');


    $stmt = $pdo->prepare('SELECT * FROM comments');
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    } else {
        //echo json_encode('Nenhum comentário encontrado');
        echo json_encode(0);
    }