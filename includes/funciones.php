<?php


//a


define('FUNCIONES_URL', __DIR__ . "/funciones.php");
define('TEMPLATES_URL', __DIR__ . "/templates");
define('CARPETA_IMAGENES', __DIR__ . '/../imagenes/');

function incluirTemplate(string $nombre, bool $inicio = false)
{
    include TEMPLATES_URL . "/${nombre}.php";
}

function estaAutenticado(): bool
{
    session_start();

    // Verificar si la clave 'login' existe en $_SESSION
    if (!$_SESSION['login']) {
        
        header('Location: /');
    } 

}


function debuguear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
} 


//escapa /sdanitizar el html

function  s($html) : string{
$s = htmlspecialchars($html);
return $s;
}

//validar tipo de contenido

function validarTipoContenido($tipo){
    $tipos = ['vendedor','propiedad'];

    return in_array($tipo, $tipos);
}

function mostrarNotificacion($codigo){

    $mensaje= '';
    
    switch($codigo){

case 1: 
    $mensaje='Creado correctmente';
    break;
    case 2:
$mensaje='Actualiuzado correctamente';
break;
case 3:
$mensaje='Eliminado correctamente';
break;
default:
$mensaje= false;
break;
    }

    return $mensaje;


    }
