<?php

include_once("Modulos/controladorEstudiante.php");
$estudiante = new EstudianteControlador();
//GET viajan las vaiables por la URL
//POST viajan  variables ocultas.
if (isset($_GET['id']) && $_GET['id'] != null) {
    //llamar el metodo buscarEstudianteId;
    $row = $estudiante->buscarEstudianteID($_GET['id']);
} else {
    //si no lo devuleva al index(Inicio)
    header('Location: index.php');
}
?>
<div class="container style-form">
    <h3><b>Datos del Estudiante # <?php echo $_GET['id']; ?><b></h3>
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div>
                <div class="container p-3">
                    <h2>Dueño</h2>
                </div>

                <div class="form-group">
                    <label for=""><span><b>Docuemnto: </b><?php echo $row['Documento']; ?></span></label><br>
                </div>
                <div class="form-group">
                    <label for=""><span><b>Nombres: </b><?php echo $row['NombreDueño']; ?></span></label><br>
                </div>
                <div class="form-group">
                    <label for=""><span><b>Apelidos: </b><?php echo $row['ApellidoDueño']; ?></span></label><br>
                </div>
                <div class="form-group">
                    <label for=""><span><b>Teléfono: </b><?php echo $row['Telefono']; ?></span></label><br>
                </div>
            </div>

            <div>
                <div class="container p-3">
                    <h2>Mascota</h2>
                </div>

                <div class="form-group">
                    <label for=""><span><b>Nombre: </b></span><?php echo $row['Nombre']; ?></label><br>
                </div>
                <div class="form-group">
                    <label for=""><span><b>Especie: </b><?php echo $row['Especie']; ?></span></label><br>
                </div>
                <div class="form-group">
                    <label for=""><span><b>Raza: </b><?php echo $row['Raza']; ?></span></label><br>
                </div>
                <div class="form-group">
                    <label for=""><span><b>Sexo: </b><?php echo $row['Sexo']; ?></span></label><br>
                </div>
                <div class="form-group">
                    <label for=""><span><b>Edad: </b><?php echo $row['Edad']; ?></span></label><br>
                </div>
                <div class="form-group">
                    <label for=""><span><b>Peso: </b><?php echo $row['Peso']; ?></span></label><br>
                </div>
                <div class="form-group">
                    <label for=""><span><b>Razon: </b>
                            <?php switch ($row['Razon']) {
                                case '1':
                                    echo 'Vacunación';
                                    break;
                                case '2':
                                    echo 'Cirugia';
                                    break;
                                case '3':
                                    echo 'Radiografias';
                                    break;
                                case '4':
                                    echo 'Análisis de Laboratorio';
                                    break;
                                case '5':
                                    echo 'Tratamiento De Enfermedades';
                                    break;
                                case '6':
                                    echo 'Cuidado Dental';
                                    break;
                                case '7':
                                    echo 'Esterilizacion y Castracion';
                                    break;
                                case '8':
                                    echo 'Hospitalizacion';
                                    break;
                                case '9':
                                    echo 'Urgencias Veterinarias';
                                    break;
                                case '10':
                                    echo 'Control De Parasitos';
                                    break;
                                case '11':
                                    echo 'Nutricion y Dietas Especializadas';
                                    break;
                                case '12':
                                    echo 'MicroChip';
                                    break;
                                default:
                                    echo 'ERROR';
                                    break;
                            } ?>
                        </span></label><br>
                </div>
                <div class="form-group">
                    <label for=""><span><b>Fecha de registro: </b><?php echo $row['Fecha']; ?></span></label><br>
                </div>
            </div>

            <div class="form-group m-2">
                <a href="?load=inicio">
                    <button type="button" class="btn btn-success btn-md">Atras</button></a><br>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</diV>