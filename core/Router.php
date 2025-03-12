<?php
/**
 * ROUTER - Gestisce le route dell'applicazione
 * --------------------------------------------
 * 🔹 Intercetta l'URL richiesto.
 * 🔹 Esegue il Controller e il metodo corrispondente.
 */
require_once '../config/routes.php';  // 🔹 Collega il file delle route dell'app
require_once 'Controller.php';  // 🔹 Necessario perché i controller ereditano da Controller
 class Router {
     public static function route($url) {
         $routes = require '../config/routes.php'; // Carica il file delle route
         $url = trim($url, '/');
 
         if (isset($routes[$url])) {
             $controllerName = $routes[$url]['controller'];
             $method = $routes[$url]['method'];
         } else {
             // 🔥 Carichiamo la pagina 404 personalizzata
             http_response_code(404);
             require_once "../app/views/errors/404.php";
             exit;
         }
 
         $controllerFile = "../app/controllers/$controllerName.php";
         if (!file_exists($controllerFile)) {
             throw new Exception("Controller $controllerName non trovato.");
         }
 
         require_once $controllerFile;
         $controller = new $controllerName();
 
         if (!method_exists($controller, $method)) {
             throw new Exception("Metodo $method non trovato in $controllerName.");
         }
 
         call_user_func([$controller, $method]);
     }
 }
 
?>
