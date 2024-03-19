<?php
// donde se llama a todo la conexion a base de datos, el autoload tambien estara incluido las clases tambien  se van agregando a todos los archivos
require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

use Model\ActiveRecord;

$db= conectarDB();

//se conecta a la BD la variable $db

ActiveRecord::setDB($db);
    //se le pasa a la clase  propiedad el valor de la conexion al ser estatico se llama a la clase Propiedad




//las funciones se incluyen aqui   aqui impoortamos la clase propiedad con el App