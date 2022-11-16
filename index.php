
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Coppel</title>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php include('modalNew.php');?>

    <div class="container-xl">
        <div class="col">
            <div class="row">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                            <img src="img/logo.png" alt="Logo" width="200" height="94" class="d-inline-block align-text-top">

                        </a>
                    </div>
                </nav>
            </div>
            <div class="row my-5">
                <div class="col">
                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#new">Agregar</a>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select class="form-select" id="filter" aria-label="Floating label select example">
                            <option selected value="0" class="opt">Todo</option>
                            <option value="1" class="opt">Completados</option>
                            <option value="2" class="opt">Pendientes</option>
                            <option value="3" class="opt">Eliminados</option>
                        </select>
                        <label for="floatingSelect">Filtros</label>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row cards">
                    <?php 
                        include 'connection.php'; 
                        
                        $sql = "SELECT * FROM todo WHERE deleted = 0";
                        $result = $conn->query($sql);
    
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($data = $result->fetch_assoc()) {
                            ?>
                            <div class="col my-3 mx-auto">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $data["nombre"]?></h5>
                                            <p class="card-text"><?php echo $print = strlen($data["descripcion"]) > 0 ? $data["descripcion"]:'Sin descripción'?></p>
                                        
                                            <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id'];?>"> Editar</a>
                                            <a class="btn btn-danger" href="deleted.php?id=<?php echo $data['id'].'&option=0';?>">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                            <?php include('modalEditar.php');?>
    
                            
                            <?php
                            
                        }
                        } else {
                        echo "0 results";
                        }
                        $conn->close();
                    ?>                
                </div>    
            </div>





        </div><!--COLUMNA END-->
    </div><!--CONTAINER END-->


        <script>
            $("#filter").change(function(){
                var filterSelected = $("#filter option:selected").val();
                $.ajax({
                    url:"fetch.php",
                    type:"GET",
                    data: "filter="+filterSelected,
                    dataType:"text",
                    success:function(data){
                        $(".cards").html(data);
                    }
                })
            });
        </script>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>