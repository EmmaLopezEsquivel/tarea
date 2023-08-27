<!DOCTYPE html>
<html lang="en" >


<head>
<title>Title</title>

<!-- Required meta tags -->
<meta charset="utf-8"  />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


<!-- Bootstrap CSS v5.2.1 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
<style>
    .img{
        width: 180px;
        height: 180px;
    }
    body {
        background-color: darkcyan;
    }
    </style>
    
    
    <section >
            <div class="row w-75 mx-auto  servicio-fila">
                <div class="col col-lg-12 col-md-12 col-sm-12 d-flex ">
                    <img src="./img/i1.png"  alt="logo "
                    class= "img rounded my-2  mx-6 my-6">
                    <div>
                        <h3 class="fs-3 my-4 px-4 pb-1 fw-bold text-light">Pagina de notas</h3>
                        <h2 class= "fs-5 mx-4 fw-bold text-light">Alumno: Jedidiel Toto Garcia. Asignatura: Desarrollo Web.</h2>
                        <P class=" fs-6 mx-4 fw-bold text-light">Docente: Luis Fernando Villafaña.<span class="mx-3"
                        >  Universidad del sur campus online.  5° Cuatrimeste </span></P>
                    </div>
                </div>
            </div>
    </section>
    <main>
    <div class="container h-100" style="padding-top: 1rem;">
        <div class="row justify-content-center align-item-center h-100">
            <div class="cal-12 col-sm-12 col-md-3 mb-3">
                <div class="card bg-secondary text-light">
                    <div class="card-body">
                        <form action="./function/insert.php" method="post">
                            <div class="mb-">
                                <label class="form-label fw-bold text-light ">Nombre de la nota</label>
                                <input name="titulo" type="text" class="form-control border-color-success bg-dark text-light">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold text-light">Contenido</label>
                                <input name="contenido" type="text" class="form-control border-color-primary bg-dark text-light">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-9">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-dark table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre de la nota</th>
                                <th scope="col">Contenido</th>
                                <th scope="col"><i class="bi bi-pencil-square text-primary"></i></th>
                                <th scope="col"><i class="bi bi-trash-fill text-primary"></i></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    require("./connection/connection.php");
                                    $query = "SELECT * FROM nota";
                                    $ejecutar = mysqli_query($connection, $query);
                                    $contador = 1;
                                    while($fila = mysqli_fetch_array($ejecutar)){
                                    ?>
                                    <tr>
                                    <td><?php echo $contador;?></td>
                                    <td><?php echo $fila['titulo'];?></td>
                                    <td><?php echo $fila['contenido'];?></td>
                                    <td><a href="./view/update_form.php?id=<?php echo $fila[ 'id' ]; ?>"><i class="bi bi-pencil-square text-primary"></i></a></td>
                                    <td><a href="./function/delete.php?id=<?php echo $fila['id'];?>"><i class="bi bi-trash-fill text-primary"></i></a></td>
                                    </tr>
                                    <?php $contador++;} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</main>
</body>
</html>