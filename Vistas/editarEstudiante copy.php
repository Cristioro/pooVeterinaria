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
    header(header: 'Location: index.php');
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
    ) ;

    //si actualizo correctamente devuelve un verdadero(true);
    if ($update == true) {
        $up = true;
    } else {
        $up = false;
    }
}

?>

<div class="container style-form">
    <h3><b>Editar estudiante<b></h3>
    <br>
    <form action="" method="post" class="form-horizontal">
        <div class="row">

            <div class="col-md-6">

                <div class="form-group">
                    <label for="txtDocumento" class="control-label col-md-3">Documento:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtDocumento" id="" class="form-control" required value="<?php echo $row['Documento']; ?>">
                    </div>

                </div>

                <div class="form-group">
                    <label for="txtNombre" class="control-label col-md-3">Nombre:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtNombre" id="" class="form-control" required value="<?php echo $row['Nombre']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtApellido" class="control-label col-md-3">Apellido:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtApellido" id="" class="form-control" required value="<?php echo $row['Apellido']; ?>">
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
                    <label for="txtEdad" class="control-label col-md-3">Edad:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtEdad" id="" class="form-control" required value="<?php echo $row['Edad']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtPromedio" class="control-label col-md-3">Promedio:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtPromedio" id="" class="form-control" value="<?php echo $row['Promedio']; ?>" required disabled>
                    </div>
                </div>

                <div class="form-group">


                    <label for="txtFecha" class="control-label col-md-3">Fecha-registro:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtFecha" id="" class="form-control" required value="<?php echo $row['Fecha']; ?>" disabled>
                    </div>
                </div>

                <div class="form-group" align="right" style="margin-right: 1%;">
                    <input type="submit" value="Actualizar" class="btn btn-success btn-md" name="btnEditar">
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