<?php

//include_once ();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB Veterinaria Recocha</title>
    <link rel="stylesheet" href="Libs/CSS/index.css">
    <!--Libreria de bootstrap para diseños de formularios-->
    <link rel="stylesheet" href="Libs/CSS/bootstrap.min.css">
    <!--Libreria datatables para diseños de tablas-->
    <link rel="stylesheet" href="Libs/CSS/datatables.min.css">
    <!--Libreria de iconos-->
    <link rel="stylesheet" href="Libs/CSS/font-awesome.min.css">
    <!--Libreria para cajas de alertas(Mensajes)-->
    <link rel="stylesheet" href="Libs/CSS/sweetalert.css">
    <!--Libreria para traer codigo de javascript con Jquery (Sirve para realizra el dinamismo en la pagina web o aplicativo)-->
    <script type="text/javascript" src="Libs/JS/jquery-1.12.3.min.js"></script>
</head>
<body>
    <div class="tituloIndex">
        <header>
            Veterinaria Recocha
        </header>

    </div>
    
    <nav>
        <ul>
        <!-- En la etiqueta <a> se va a mandar la variable load con la vista solicitada por el usuario-->
        <li><a href="?load=inicio">Inicio</a></li>
        <li><a href="?load=crearEstudiante">Registrar</a></li>
        <li><a href="https://google.com">Salir</a></li>
        </ul>
    </nav>
    <br>
    <main>
        <section>
            <!--Aqui va el código para cargar la vista del formulario solicitado-->
            <?php 
                //Unir el archivo enrutador.php a la vista del index para llamra la clase Enrutador 
                include_once ('Modulos/enrutador.php');
                //Crear variable para instanciar la clase Enrutador y asi poder acceder al metodo loadView(cargar vista)
                $enrutador = new Enrutador();
                //Condicion para validar que la variable por GET llamada load si llega vacia darle una ruta osea inicio
                if (!isset($_GET['load'])) {
                    $_GET['load'] = 'inicio';
                    //llamar la funcion cargar vista(loadView) para enviar la vista solicitada por el usuario
                    $enrutador->loadView($_GET['load']);
                }else{
                    $enrutador->loadView($_GET['load']);
                }
            ?>
        </section>
    </main>

    <footer>
        Derechos reservados &copy; CENSA 2024
    </footer>
    <!--Librerias de javascript para las tablas, alertas y css de bootstrap-->
    <script type="text/javascript" src="Libs/JS/bootstrap.min.js"></script>
    <script type="text/javascript" src="Libs/JS/datatables.min.js"></script>
    <script type="text/javascript" src="Libs/JS/sweetalert.min.js"></script>
    <script type="text/javascript" src="Libs/JS/jquery.datatables.min.js"></script>
    <!--código de javascript para las tablas sean en español-->
    
</body>
</html>