<?php
include_once("Modulos/controladorEstudiante.php");
$estudianteC = new EstudianteControlador();
date_default_timezone_set("America/Bogota");
if (isset($_POST['btnRegistrar'])) {
    //Recibir los datos del formulario registro de estudiante
    $fecha = date('Y-m-d H:i:s');
    //var_dump($_POST['txtNota1'], $_POST['txtNota2'], $_POST['txtNota3'], $fecha); exit();
    $datosEstudiantes = $estudianteC->insertarEstudiante(
        $_POST['txtDocumento'],
        $_POST['txtNombreDueño'],
        $_POST['txtApellidoDueño'],
        $_POST['txtTelefono'],
        $_POST['txtNombre'],
        $_POST['txtEspecie'],
        $_POST['txtRaza'],
        $_POST['txtSexo'],
        $_POST['txtEdad'],
        $_POST['txtPeso'],
        $_POST['txtRazon'],
        $fecha
    ) ;
    if ($datosEstudiantes == true) {
        //echo "Registro exitoso";
        $val = "1";
    } else {
        //echo "El documento ya se encuentra registrado";
        $val = "2";
    }
}

?>

<div class="container style-form">
    <h3><b>Registrar Mascota<b></h3>
    <br>
    <form action="" method="post" class="form-horizontal">
        <div class="row">

            <div class="col-md-6">

                <div class="form-group">
                    <label for="txtDocumento" class="control-label col-md-3">Documento:</label>
                    <div class="col-md-9">
                        <input type="number" name="txtDocumento" id="" class="form-control" required>
                    </div>

                </div>

                <div class="form-group">
                    <label for="txtNombreDueño" class="control-label col-md-3">Nombre del Dueño:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtNombreDueño" id="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtApellidoDueño" class="control-label col-md-3">Apellido Del Dueño:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtApellidoDueño" id="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtTelefono" class="control-label col-md-3">Telefono:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtTelefono" id="" class="form-control" required>
                    </div>
                </div>



            </div>

            <div class="col-md-6">


            <div class="form-group">
                    <label for="txtNombre" class="control-label col-md-3">Nombre:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtNombre" id="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtEspecie" class="control-label col-md-3">Especie:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtEspecie" id="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtRaza" class="control-label col-md-3">Raza:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtRaza" id="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group" >
                    <label for="txtSexo" class="control-label col-md-3">Sexo:</label>

                    <div class="d-flex flex-row m-2 ">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txtSexo" id="flexRadioMacho" value="Macho" required>
                            <label class="form-check-label" for="txtSexo">
                                Macho
                            </label>
                        </div>
                        <div class="form-check ms-3">
                            <input class="form-check-input" type="radio" name="txtSexo" id="flexRadioHembra" value="Hembra">
                            <label class="form-check-label" for="txtSexo">
                                Hembra
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtEdad" class="control-label col-md-3">Edad:</label>
                    <div class="col-md-9">
                        <input type="number" name="txtEdad" id="" class="form-control" required>
                    </div>
                </div>

                <div class="form-group col-md-9">
                    <label for="txtPeso" class="control-label col-md-3">Peso:</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" aria-label="Peso" name="txtPeso" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1">Kg</span>
                    </div>
                </div>

                <div class="form-group col-md-9">
                <label for="txtRazon" class="control-label col-md-3">Razon:</label>
                    <select class="form-select" name="txtRazon" required>
                        <option selected disabled>Abrir este menú de selección</option>
                        <option value="1">Vacunación</option>
                        <option value="2">Cirugía</option>
                        <option value="3">Radiografías</option>
                        <option value="4">Análisis de laboratorio</option>
                        <option value="5">Tratamiento de enfermedades</option>
                        <option value="6">Cuidado dental</option>
                        <option value="7">Esterilización y castración</option>
                        <option value="8">Hospitalización</option>
                        <option value="9">Urgencias veterinarias</option>
                        <option value="10">Control de parásitos</option>
                        <option value="11">Nutrición y dietas especializadas</option>
                        <option value="12">MicroChip</option>
                    </select>
                </div>

                <div class="form-group">

                    <?php $date = date('Y-m-d H:i:s'); ?>
                    <label for="txtFecha" class="control-label col-md-3">Fecha-registro:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtFecha" id="" class="form-control" required value="<?php echo $date; ?>" disabled>
                    </div>
                </div>

                <div class="form-group" align="right" style="margin-right: 1%;">
                    <input type="submit" value="Guardar" class="btn btn-primary btn-md" name="btnRegistrar">
                </div>


            </div>


        </div>

    </form>

</div>
<br><br>

<!--Si se registro exitosamente devuelve un 1-->
<?php if (isset($val) && $val == "1"): ?>
    <script type="text/javascript">
        //Cuando el documento sea leido se ejecute
        $(document).ready(function() {
            //Mostrar caja de alerta de la libreria de sweetalert
            sweetAlert("Registro Exitoso");
            
        });
    </script>
<?php endif; ?>
<!--Si no se registro devuelve un 2-->
<?php if (isset($val) && $val == "2"): ?>
    <script type="text/javascript">
        $(document).ready(function() {

            sweetAlert("Documento ya esta registrado!!!");

        });
    </script>
<?php endif; ?>