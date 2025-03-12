<?php
/**
 * CLASSE BASE CONTROLLER
 * ----------------------
 * 🔹 Ogni controller eredita da questa classe.
 * 🔹 Permette di caricare le view più facilmente.
 */

 require_once 'Model.php';  // 🔹 Necessario per l'accesso ai modelli

class Controller {
    protected function view($view, $data = []) {
        require_once "../app/views/$view.php";
    }
}
?>
