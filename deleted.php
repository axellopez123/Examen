<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        if(isset($_GET['option'])){
            if($_GET['option'] == 0){
                $option = ' 1';
            }else{
                $option = ' 0';
            }
        }
    }else{
        $option = '';
    }
    
    $id = $_GET['id'];

    include 'connection.php';

    // sql to delete a record
    $sql = 'UPDATE todo SET deleted ='.$option.' WHERE id='.$id;

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); 

    // echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>
