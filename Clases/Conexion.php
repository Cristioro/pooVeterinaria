<?php

class Conexion
{
    //Conexion con MySqli
    private $host;//nombre servidor
    private $user;//usuario
    private $pass;//contraseña
    private $db;//bases de datos
    private $con;//cadena de conexion

    //Metodo constructor su funcion es ejecutar el metodo al momento de llamar la clase (Conexion)
    public function __construct(){
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db = "pooveterinario";
        $this->con = new MySqli($this->host, $this->user, $this->pass, $this->db) or die ("No se pudo conectar".mysqli_error());
        $this->con->set_charset("utf8");//Recibir caracteres especiales del español.

    }
    

    //crear metodo para hacer consultas simples (Insert, Update y Delete)

    public function consultaSimple($query){
        
        try{
            $consulta = $this->con->query($query) or die ("Ha ocurrido un error al realizar la consulta");

        }catch(Exception $e){
            $this->con->rollback();//devuelve la consulta y no se ejecuta
            mysqli_free_result($consulta);//Liberar consulta
            mysqli_close($this->con);//cerrar conexion

        }

    }

    //crear metodo para hacer consultas con retorno de datos o tablas (Select)
    public function consultaRetorno($query){

        try{
            $consulta = $this->con->query($query);
            return $consulta;
        }catch(Exception $e){
            $consulta = $this->con->query($query);
            mysqli_free_result($consulta);//Liberar consulta
            mysqli_close($this->con);//cerrar conexion
        }
    }



}
