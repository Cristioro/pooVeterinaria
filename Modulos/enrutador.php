<?php 
//crear clase para enrutar las vistas por la url
class Enrutador
{
    //Crear metodo para cargar la vista seleccionada por el usuario
    public function loadView($view)
    {
        //Segun casos
        switch ($view) {
            case 'inicio':
                include_once ('Vistas/'. $view . '.php');
                break;
            case 'crearEstudiante':
                include_once ('Vistas/'. $view . '.php');
                break;
            case 'editarEstudiante':
                include_once ('Vistas/'. $view . '.php');
                break;
            case 'eliminarEstudiante':
                include_once ('Vistas/'. $view . '.php');
                break;
            case 'verEstudiante':
                include_once ('Vistas/'. $view . '.php');
                break;
            case 'index':
                include_once ($view.'.php');
                break;
            default:
                include_once ('Vistas/error.php');
                break;
        }

    }

}

?>
