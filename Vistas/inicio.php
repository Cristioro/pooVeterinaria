<?php

include_once ("Modulos/controladorEstudiante.php");
$estudiantes = new EstudianteControlador();
$tablaEst = $estudiantes->index();
//var_dump($tablaEst); exit;

?>
<div class="container style-form">
     <h3><b>Listado de Mascotas</b></h3>
    <br>
    <!--Clase de bootstrap para colocar la tabla en responsive-->
    <div class="table-responsive">
    
        <table class="table table-striped table-bordered nowrap">
            <!--Encabezado de la tabla-->
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Documento</th>
                    <th>Nombre Completo del Dueño</th>
                    <th>Teléfono</th>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Raza</th>
                    <th>Sexo</th>
                    <th>Edad</th>
                    <th>Peso</th>
                    <th>Razon</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
            <!--Cuerpo de la tabla (Datos)-->
                <?php foreach ($tablaEst as $data) :?> 
                    <tr>
                        <td><?php echo $data['IdMascota'];?></td>
                        <td><?php echo $data['Documento'];?></td>
                        <td><?php echo $data['NombreCompleto'];?></td>
                        <td><?php echo $data['Telefono'];?></td>
                        <td><?php echo $data['Nombre'];?></td>
                        <td><?php echo $data['Especie'];?></td>
                        <td><?php echo $data['Raza'];?></td>
                        <td><?php echo $data['Sexo'];?></td>
                        <td><?php echo $data['Edad'];?></td>
                        <td><?php echo $data['Peso'], ' Kg';?></td>
                        <td>
                            <?php switch ($data['Razon']) {
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
                            }?>
                        </td>
                        <td><?php echo $data['Fecha'];?></td>
                        <td>
                        <!--Crear botones para editar eliminar y ver el estudiante-->
                            <a href="?load=verEstudiante&id=<?php echo $data['IdMascota'];?>">
                                <button type="button" class="btn btn-primary btn-md">Ver</button></a>

                            <a href="?load=editarEstudiante&id=<?php echo $data['IdMascota'];?>">
                            <button type="button" class="btn btn-info btn-md">Editar</button></a>

                            <a href="?load=eliminarEstudiante&id=<?php echo $data['IdMascota'];?>">
                            <button type="button" class="btn btn-danger btn-md">Eliminar</button></a>

                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>

