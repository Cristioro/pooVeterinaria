<?php
include_once ("Clases/Estudiante.php");
class EstudianteControlador
{
    //Crear variable para instanciar la clase Estudiante
    private $estudiante;
    //Crear constructor para llamar la clase.
    public function __construct()
    {
        $this->estudiante = new Estudiante;
    }
    //Crear metodo para listar los estudiantes que se consultan en la base de datos
    public function index()
    {
        //crear variable para llenarla con una tabla que retorna la consulta en la clase Estudiante
          $tabla = $this->estudiante->listarEstudiantes();
          return $tabla;
    }
    //Crear metodo para registrar un estudiante
    public function insertarEstudiante($Documento, $NombreDueño, $ApellidoDueño, $Telefono, $Nombre, $Especie, $Raza, $Sexo, $Edad, $Peso, $Razon, $Fecha)  
    {
        //Enviar valor a los parametros de la consulta
        $this->estudiante->__SET('Documento', $Documento);
        $this->estudiante->__SET('NombreDueño', $NombreDueño);
        $this->estudiante->__SET('ApellidoDueño', $ApellidoDueño);
        $this->estudiante->__SET('Telefono', $Telefono);
        $this->estudiante->__SET('Nombre', $Nombre);
        $this->estudiante->__SET('Especie', $Especie);
        $this->estudiante->__SET('Raza', $Raza);
        $this->estudiante->__SET('Sexo', $Sexo);
        $this->estudiante->__SET('Edad', $Edad);
        $this->estudiante->__SET('Peso', $Peso);
        $this->estudiante->__SET('Razon', $Razon);
        $this->estudiante->__SET('Fecha', $Fecha);
        //Llamar la funcion registrarEstudiante() en la clase Estudiante
        $result = $this->estudiante->registrarEstudiante();
        //Retornar respuesta de la insercion del registro
        return $result;
        
    }

    public function buscarEstudianteID($id){
        $this->estudiante->__SET('IdMascota', $id);
        $data = $this->estudiante->buscarEstudianteId();
        return $data;
    }

    public function editarEstudiante($Documento, $NombreDueño, $ApellidoDueño, $Telefono, $Nombre, $Especie, $Raza, $Sexo, $Edad, $Peso, $Razon, $IdMascota)
    {
        $this->estudiante->__SET('Documento', $Documento);
        $this->estudiante->__SET('NombreDueño', $NombreDueño);
        $this->estudiante->__SET('ApellidoDueño', $ApellidoDueño);
        $this->estudiante->__SET('Telefono', $Telefono);
        $this->estudiante->__SET('Nombre', $Nombre);
        $this->estudiante->__SET('Especie', $Especie);
        $this->estudiante->__SET('Raza', $Raza);
        $this->estudiante->__SET('Sexo', $Sexo);
        $this->estudiante->__SET('Edad', $Edad);
        $this->estudiante->__SET('Peso', $Peso);
        $this->estudiante->__SET('Razon', $Razon);
        $this->estudiante->__SET('IdMascota', $IdMascota);
        //Llamar la funcion editarEstudiante() en la clase Estudiante.
        $result = $this->estudiante->editarEstudiante();
        //Retornar respuesta de la actualización del registro.
        return $result;

    }


    //Crear metodo para eliminar el estudiante desde la solicitud a la base de datos
    public function eliminarEstudiante($Id){
        $this->estudiante->__SET('IdMascota', $Id);
        $result = $this->estudiante->eliminarEstudiante();
        return $result;
    }

}