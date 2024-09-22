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
//dar clic al boton editar entra a la condicion y realiza la actualizacion
if (isset($_POST['btnEditar'])) {
    //llamar el metodo editarEstudiante y recibir los parametros del formulario
    $update = $estudiante->editarEstudiante(
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
        $_GET['id']
    );

    //si actualizo correctamente devuelve un verdadero(true);
    if ($update == true) {
        $up = true;
    } else {
        $up = false;
    }
}

?>

<div class="container style-form">
    <h3><b>Editar Mascotas<b></h3>
    <br>
    <form action="" method="post" class="form-horizontal">
        <div class="row">

            <div class="col-md-6">

                <div class="form-group">
                    <label for="txtDocumento" class="control-label col-md-3">Documento:</label>
                    <div class="col-md-9">
                        <input type="number" name="txtDocumento" id="" class="form-control" required value="<?php echo $row['Documento']; ?>">
                    </div>

                </div>

                <div class="form-group">
                    <label for="txtNombreDueño" class="control-label col-md-3">Nombre del Dueño:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtNombreDueño" id="" class="form-control" required value="<?php echo $row['NombreDueño']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtApellidoDueño" class="control-label col-md-3">Apellido Del Dueño:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtApellidoDueño" id="" class="form-control" required value="<?php echo $row['ApellidoDueño']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtTelefono" class="control-label col-md-3">Telefono:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtTelefono" id="" class="form-control" required value="<?php echo $row['Telefono']; ?>">
                    </div>
                </div>



            </div>

            <div class="col-md-6">


                <div class="form-group">
                    <label for="txtNombre" class="control-label col-md-3">Nombre:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtNombre" id="" class="form-control" required value="<?php echo $row['Nombre']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtEspecie" class="control-label col-md-3">Especie:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtEspecie" id="" class="form-control" required value="<?php echo $row['Especie']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtRaza" class="control-label col-md-3">Raza:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtRaza" id="" class="form-control" required value="<?php echo $row['Raza']; ?>">
                    </div>
                </div>

                <div class="form-group" required>
                    <label for="txtSexo" class="control-label col-md-3">Sexo:</label>

                    <div class="d-flex flex-row m-2 ">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txtSexo" id="flexRadioMacho" value="Macho" required <?php if ($row['Sexo'] == 'Macho') { ?> checked <?php } ?>>
                            <label class="form-check-label" for="txtSexo">
                                Macho
                            </label>
                        </div>
                        <div class="form-check ms-3">
                            <input class="form-check-input" type="radio" name="txtSexo" id="flexRadioHembra" value="Hembra" <?php if ($row['Sexo'] == 'Hembra') { ?> checked <?php } ?>>
                            <label class="form-check-label" for="txtSexo">
                                Hembra
                            </label>
                        </div>
                    </div>

                </div>

                <div class="form-group col-md-9">
                    <label for="txtPeso" class="control-label col-md-3">Peso:</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" aria-label="Peso" name="txtPeso" aria-describedby="basic-addon1" value="<?php echo $row['Peso']; ?>">
                        <span class="input-group-text" id="basic-addon1">Kg</span>
                    </div>
                </div>

                <div class="form-group col-md-9">
                    <label for="txtRazon" class="control-label col-md-3">Razon:</label>
                    <select class="form-select" name="txtRazon" required>
                        <option>Abrir este menú de selección</option>
                        <option <?php if ($row['Razon'] == '1') { ?> selected <?php } ?> value="1">Vacunación</option>
                        <option <?php if ($row['Razon'] == '2') { ?> selected <?php } ?> value="2">Cirugía</option>
                        <option <?php if ($row['Razon'] == '3') { ?> selected <?php } ?> value="3">Radiografías</option>
                        <option <?php if ($row['Razon'] == '4') { ?> selected <?php } ?> value="4">Análisis de laboratorio</option>
                        <option <?php if ($row['Razon'] == '5') { ?> selected <?php } ?> value="5">Tratamiento de enfermedades</option>
                        <option <?php if ($row['Razon'] == '6') { ?> selected <?php } ?> value="6">Cuidado dental</option>
                        <option <?php if ($row['Razon'] == '7') { ?> selected <?php } ?> value="7">Esterilización y castración</option>
                        <option <?php if ($row['Razon'] == '8') { ?> selected <?php } ?> value="8">Hospitalización</option>
                        <option <?php if ($row['Razon'] == '9') { ?> selected <?php } ?> value="9">Urgencias veterinarias</option>
                        <option <?php if ($row['Razon'] == '10') { ?> selected <?php } ?> value="10">Control de parásitos</option>
                        <option <?php if ($row['Razon'] == '11') { ?> selected <?php } ?> value="11">Nutrición y dietas especializadas</option>
                        <option <?php if ($row['Razon'] == '12') { ?> selected <?php } ?> value="12">MicroChip</option>
                    </select>
                </div>

                <div class="form-group">

                    <label for="txtFecha" class="control-label col-md-3">Fecha-registro:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtFecha" id="" class="form-control" required value="<?php echo $row['Fecha']; ?>" disabled>
                    </div>
                </div>

                <div class="d-flex flex-row-reverse mt-2">
                    <div class="form-group" align="right" style="margin-right: 1%;">
                        <input type="submit" value="Guardar" class="btn btn-primary btn-md" name="btnEditar">
                    </div>
                    <div class="form-group" align="right" style="margin-right: 1%;">
                        <a href="?load=inicio">
                        <input type="button" value="Salir" class="btn btn-danger btn-md" name="btnSalir">
                        </a>
                    </div>
                </div>



            </div>


        </div>

    </form>

</div>

<?php if (isset($up) && $up == true) : ?>

    <script type="text/javascript">
        $(document).ready(function() {

            swal({
                    title: "Actualización exitosa",
                    type: "success",
                    confirmButton: "#3CB371",
                    confirmButtonText: "Aceptar",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        window.location = "index.php?load=inicio";
                    }
                });

        });
    </script>
<?php endif; ?>