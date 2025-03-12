<?php
require '../config/config.php';

/**
 * CLASSE BASE MODEL
 * -----------------
 * 🔹 Tutti i modelli ereditano da questa classe.
 * 🔹 Permette di eseguire query più facilmente.
 */

class Model {
    protected $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }
}
?>