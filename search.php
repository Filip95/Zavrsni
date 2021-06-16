<?php

    $servername = "127.0.0.1";
    $username = "root";
    $password = "vivify";
    $dbname = "vivify_blog";

    try{
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    } catch(Exception $ex){
        exit($ex->getMessage());
    }

    $statement = $pdo->prepare("SELECT * FROM posts WHERE `title` LIKE ?");
    $statement->execute(["%".$_POST['search']."%"]);
    $results = $statement->fetchAll();
    if(isset($_POST['ajax'])){
        echo json_encode($results);
    }

?>    