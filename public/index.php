<?php

require_once '../config/config.php';  // 🔹 Configurazione globale
require_once '../core/Session.php';   // 🔹 Avvia le sessioni
require_once '../core/Router.php';    // 🔹 Gestione delle route
require_once '../core/Logger.php';    // 🔹 Log degli errori
require_once '../core/Auth.php';      // 🔹 (Opzionale) Autenticazione

try {
    // 🔥 Avvia il router e gestisce la richiesta
    Router::route($_GET['url'] ?? '');
} catch (Exception $e) {
    Logger::logException($e);
    http_response_code(500);
    require_once "../app/views/errors/500.php";
    exit;
}