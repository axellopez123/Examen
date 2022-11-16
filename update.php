<?php
    include 'connection.php'; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = isset($_POST['id'])? $_POST['id']: '';
        echo $id;

        $name = isset($_POST['nombre'])? 'nombre = "'.$_POST['nombre'].'"': '';

        $description = isset($_POST['descripcion'])? ' ,descripcion = "'.$_POST['descripcion'].'"': '';

        $area = isset($_POST['area'])? ' ,area = "'.$_POST['area'].'"': '';
        $status = isset($_POST['estatus'])? ' ,estatus = "'.$_POST['estatus'].'"': '';

    }else{

    }

$sql = 'UPDATE todo SET '.
                    $name.
                    $description.
                    $area.
                    $status.
                    ', fecha_actualizacion = now() WHERE id='.$id;
 echo $sql;
if ($conn->query($sql) === TRUE) {
  header("Location: index.php"); 
  // echo "PUT JQuery for advice that is correct (GREEN)";
} else {
  echo "Send error  " . $conn->error;
}

$conn->close();
?>