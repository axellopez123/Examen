<?php include('modalNew.php');?>
<?php 
                    include 'connection.php'; 
                    if ($_SERVER["REQUEST_METHOD"] == "GET") {

                        if(isset($_GET['filter'])){
                            if($_GET['filter'] == 0){
                                $status = ' WHERE deleted = 0';
                            }else if($_GET['filter'] == 3){
                                $status = " WHERE deleted = 1";
                            }else{
                                $status = " WHERE deleted = 0 AND estatus = ".$_GET['filter'];  
                            }
                        }
                    }else{
                        $status = '';
                    }

                    
                    $sql = 'SELECT * FROM todo'.$status;
                    // echo $sql;
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($data = $result->fetch_assoc()) {
                        ?>
                        <div class="col my-3 mx-auto">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data["nombre"]?></h5>
                                        <p class="card-text"><?php echo $data["descripcion"]?></p>
                                    <?php
                                        if($_GET['filter'] != 3){
                                    ?>
                                        <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id'];?>"> Editar</a>
                                        <a class="btn btn-secondary" href="deleted.php?id=<?php echo $data['id'].'&option=1'?>">Eliminar</a>
    
                                    <?php include('modalEditar.php');?>
    
                                    <?php
                                        }else{
                                    ?>
                                        <a class="btn btn-success" href="deleted.php?id=<?php echo $data['id'].'&option=2'?>">Restaurar</a>
                                    <?php
                                        }
                                    ?>
                                
                                </div>     
                            </div>
                        </div>

                        <?php include('modalNew.php');?>
                        <?php include('modalEditar.php');?>
                        <?php
                        
                    }
                    } else {
                    echo "<h1>0 results</h1>";
                    }
                    $conn->close();
                ?>  