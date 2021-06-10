<?php

    if(isset($_POST)){

        $codigo = $_POST['codigo'];
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        
        require "./conexion.php";
        if(empty($_POST['idp'])){


        $query = $pdo->prepare("INSERT INTO productos (codigo, producto, precio, cantidad) 
        VALUES (:cod, :pro, :pre, :cant)");
        $query->bindValue(":cod", $codigo, PDO::PARAM_STR);
        $query->bindValue(":pro", $producto, PDO::PARAM_STR);
        $query->bindValue(":pre", $precio, PDO::PARAM_STR);
        $query->bindValue(":cant", $cantidad, PDO::PARAM_INT);
        $query->execute();
        $pdo = null;
        echo "ok";
    

        }else{
            $id = $_POST['idp'];
            $query = $pdo->prepare("UPDATE productos 
            SET codigo=:cod, producto=:pro, precio=:pre, cantidad=:cant WHERE id=:id");
            $query->bindValue(":cod", $codigo, PDO::PARAM_STR);
            $query->bindValue(":pro", $producto, PDO::PARAM_STR);
            $query->bindValue(":pre", $precio, PDO::PARAM_STR);
            $query->bindValue(":cant", $cantidad, PDO::PARAM_INT);
            $query->bindValue(":id", $id, PDO::PARAM_INT);
            $query->execute();
            $pdo = null;
            echo "modificado";
        }



    }
?>