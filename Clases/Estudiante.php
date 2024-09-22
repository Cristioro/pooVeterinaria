<?php

include_once("Conexion.php");

class Estudiante
{
    //crear atributos de la clase que estan en la tabla de la base de datos
    private $IdMascota;
    private $Documento;
    private $NombreDueño;
    private $ApellidoDueño;
    private $Telefono;
    private $Nombre;
    private $Especie;
    private $Raza;
    private $Sexo;
    private $Edad;
    private $Peso;
    private $Razon;
    private $Fecha;
    private $conexion;
    //crear metodo constructor para conectar a la base de datos con la clase conexion
    public function __construct()
    {
        //instanciar la clase Conexion en un objeto llamado $conexion
        $this->conexion = new Conexion();
    }
    //Crear los metodos SET(envia o asigna el valor al atributo) y GET(trae el valor que contenga el atributo)
    public function __SET($atributo, $valor)
    {
        //asigna un valor al atributo
        $this->$atributo = $valor;
    }
    public function __GET($atributo)
    {
        //retorna el valor del atributo
        return  $this->$atributo;
    }
    //realizar acciones en esta clase por ejemplo registrar, validar, listar, modificar, eliminar.....
    //crear un metodo para retornar la tabla de estudiantes de la base de datos (SELECT).
    public function listarEstudiantes()
    {
        //crear la consulta en la base de datos que necesito para llenar la tabla estudiantes en mi formulario
        $sql = "SELECT IdMascota, Documento, CONCAT(NombreDueño,' ', ApellidoDueño) AS NombreCompleto, Telefono, Nombre,Especie, Raza, Sexo, Edad, Peso, Razon, Fecha
        FROM Mascotas";
        //llamar el metodo para retornar la tabla (consultaRetorno)
        $tabla = $this->conexion->consultaRetorno($sql);
        //retornar la tabla con todos los registros de la base de datos
        return $tabla;
    }

    //Crear un metodo para registrar estudiantes en la tabla estudiantes de la base de datos
    public function registrarEstudiante()
    {
        //validar que el estudiante no se repita(Documento)
        //Consultar en la base de datos si existe el Documento en la tabla estudiantes
        $validarDato = "SELECT * FROM Mascotas WHERE Documento = '{$this->Documento}'";
        //realizar la consulta y devolver un resultado
        $resultado = $this->conexion->consultaRetorno($validarDato);
        //capturar cantidad de registros si devuleve datos.
        $canFilas = mysqli_num_rows($resultado);
        //Colocar una condicion de si llegan registros no debe dejar insertar el mismo dato.
        if ($canFilas > 0) {
            return false;
        } else {
            //consulta para registrar el estudiante
            $sql = "INSERT INTO Mascotas(Documento, NombreDueño, ApellidoDueño, Telefono, Nombre, Especie, Raza, Sexo, Edad, Peso, Razon, Fecha)
            VALUES ('{$this->Documento}','{$this->NombreDueño}','{$this->ApellidoDueño}','{$this->Telefono}','{$this->Nombre}','{$this->Especie}','{$this->Raza}', 
            '{$this->Sexo}', '{$this->Edad}', '{$this->Peso}', '{$this->Razon}', '{$this->Fecha}')";
            //llamar la conexion y ejecutar la consulta con la variable $sql.
            $this->conexion->consultaSimple($sql);
            return true;
        }
    }
    //Crear metodo actualizar estudiante
    public function editarEstudiante()
    {
        //consulta db para actualizar datos del estudiante
        $sql = "UPDATE Mascotas SET NombreDueño = '{$this->NombreDueño}', ApellidoDueño = '{$this->ApellidoDueño}'
        , Telefono = '{$this->Telefono}',  Nombre = '{$this->Nombre}' ,  Especie = '{$this->Especie}',  Raza = '{$this->Raza}',  Sexo = '{$this->Sexo}',  Edad = '{$this->Edad}',  Peso = '{$this->Peso}',  Razon = '{$this->Razon}',  Fecha = '{$this->Fecha}' WHERE IdMascota = '{$this->IdMascota}'";
        //Ejecutar la consulta de actualizar
        $this->conexion->consultaSimple($sql);
        return true;
    }

    //Crear metodo eliminar estudiante
    public function eliminarEstudiante()
    {
        //consulta db para eliminar datos del estudiante
        $sql = "DELETE FROM Mascotas WHERE IdMascota = '{$this->IdMascota}'";
        //ejecutar la consulta con la conexion
        $this->conexion->consultaSimple($sql);
        return true;
    }
    //crear metodo para buscar el estudiante solicitado por la url con la variable ?id de la vista Ver Estudante
    public function buscarEstudianteId()
    {
        $sql = "SELECT * FROM Mascotas WHERE IdMascota = '{$this->IdMascota}' LIMIT 1";
        //llamar el metodo para retornar los datos (consultaRetorno)
        $tabla = $this->conexion->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($tabla);
        return $row;
    }
}
