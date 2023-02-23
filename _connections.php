<?php
    function connection(){
        $pdo = new PDO('mysql:host=localhost;dbname=pdv-php', 'celino3x', '123456');
        return $pdo;
    }

    if($pdo){
        echo "Falha ao conectar com a base de dados";
    }else{
        echo "<h1>Você está conectado!</h1>";
    }
    ?>

