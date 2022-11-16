<?php
    include 'connection.php'; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
        // collect value of input field
        $name = $_POST["nombre"];
        $description = $_POST["descripcion"];
        $area = $_POST["area"];
        $status = $_POST["estatus"];   
        
    }

    $sql = "INSERT INTO todo (nombre, descripcion, area, estatus, fecha_registro)
    VALUES ('".$name."','".$description."','".$area."','".$status."',now())";

    if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header("Location: index.php"); 
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>