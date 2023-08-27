<?php
// print_r($_GET);

$id = $_GET[ 'id' ];

require("../connection/connection.php");

$query = "SELECT * FROM nota WHERE id = $id";

$ejecutar = mysqli_query($connection, $query);


$fila = mysqli_fetch_array($ejecutar);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <style>
    body {
        background-color: slateblue;
    }
    </style>
    <header>
        <div class=  "justify-content-center align-items-center w-100 mx-5 my-5 " >
            <h1 class="text-light">Pagina para editar las notas</h1>
        </div>
    </header>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-6">
                    <div class="card ">
                        
                        <div class="card-body ">
                            <form action="../function/update.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Asunto de nota</label>
                                    <input name="titulo" value="<?php echo $fila[ 'titulo' ]; ?>" type="text"
                                        class="form-control ">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Informacion de nota</label>
                                    <input name="contenido" value="<?php echo $fila[ 'contenido' ]; ?>" type="text"
                                        class="form-control ">
                                </div>
                                <input type="hidden" name="id" value="<?php echo $fila[ 'id' ]; ?>">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>