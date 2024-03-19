<?php// va a llamar todo los metodos funciones el router va a llamar a todas las urls que soporta el proyecto
require_once __DIR__ . '/../includes/app.php';
//vamos a registrar algunas urls y que metodods del controlador van a llamar esas funciones
 use MVC\Router;

 $router= new Router();

 $router->comprobarRutas();

 //van a validar que todas las rutas existan dsae3w131243

echo "Domingo";




 ?>