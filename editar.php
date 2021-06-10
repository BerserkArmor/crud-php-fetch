<?php

    $data = file_get_contents("php://input");
    require "./conexion.php";

    $consulta =  $pdo->prepare("SELECT * FROM productos WHERE id=:id");
    $consulta->bindValue(":id", $data, PDO::PARAM_INT);
    $consulta->execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    echo json_encode($resultado);



?>