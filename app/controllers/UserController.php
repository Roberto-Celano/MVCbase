<?php
require_once '../config/config.php';
require_once 'Session.php';
if ($registrationSuccess) {
    Notifications::add('success', 'Registrazione completata con successo!');
    header("Location: " . BASE_URL . "user/login");
    exit;
} else {
    Notifications::add('error', 'Errore durante la registrazione.');
}
