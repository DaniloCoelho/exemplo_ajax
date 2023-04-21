<?php
/*
    $usuario = "root";
    $senha = "";
    $database = "simulado";
    $host = "localhost"; 

    $mysqli = new mysqli($host , $usuario , $senha , $database);

    if($mysqli->error){
        die("Falha ao conectar ao banco de dados" .$mysqli->error);
    }else{
        echo ("");
    }*/
    define("BD_USUARIO", "root");
    define("BD_SENHA" ,"");
    define("BD_DSN","mysql:dbname=bd-comment-video;host=127.0.0.1");
    //define("EMAIL_NOTIFICACAO" , "meuemail@meudominio.com.br");

    try{
        $pdo = new PDO(BD_DSN ,BD_USUARIO ,BD_SENHA  );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "PDO Falha na conexão com o banco de dados".$e->getMessage();
        die();

    }
    
    

?>