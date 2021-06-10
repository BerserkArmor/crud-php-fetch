<?php

    $data = file_get_contents('php://input');
    require "./conexion.php";

    $consulta = $pdo->prepare("SELECT * FROM productos ORDER BY id ASC");
    $consulta->execute();
    if($data != ""){
        $consulta = $pdo->prepare("SELECT * FROM productos WHERE id LIKE '%".$data."%' OR producto LIKE '%".$data."%'
         OR precio LIKE '%".$data."%'");
    $consulta->execute();

    }
    $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
    foreach ($resultado as $value) {
        echo "<tr >
            <th scope='row'>".$value->id."</th>
            <td>".$value->producto."</td>
            <td>".$value->precio."</td>
            <td>".$value->cantidad."</td>
            <td>
                <button type='button' class='btn btn-sm btn-success '  onclick=(editar(".$value->id."))>
                <i class='far fa-edit'></i>
                </button>
                <button type='button' class='btn btn-sm btn-danger m-auto' onclick=(eliminar(".$value->id.")) >
                <i class='far fa-trash-alt'></i>
                </button>
            </td>
        
        </tr>";
    };



?>