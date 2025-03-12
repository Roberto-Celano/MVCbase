<?php
/**
 * CONFIGURAZIONE GLOBALE DEL PROGETTO
 * -----------------------------------
 * 🔹 Memorizza le configurazioni di sistema.
 * 🔹 Gestisce la connessione al database.
 * 🔹 Definisce costanti per URL e percorsi.
 */

define('BASE_URL', 'http://localhost/mvc/'); // Modifica per l'URL del tuo progetto

// Impostazioni Database
define('DB_HOST', 'localhost');
define('DB_NAME', 'mvc_project');
define('DB_USER', 'root');
define('DB_PASS', '');

// Connessione al database con PDO
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore di connessione al database: " . $e->getMessage());
}
?>