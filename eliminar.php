<?php


     $data = file_get_contents("php://input");
     require "./conexion.php";
    try{

        
        $consulta = $pdo->prepare("DELETE FROM productos WHERE id=:id");
        $consulta->bindValue(":id", $data, PDO::PARAM_INT);
        $consulta->execute();
   
        if($consulta){
           echo "ok";
        }

    }catch(PDOException $e){
        echo "-1";
    }
    


?>