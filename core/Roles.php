<?php
require_once 'Auth.php';

/**
 * GESTIONE RUOLI UTENTE
 * ---------------------
 * 🔹 Controlla se l'utente ha i permessi richiesti.
 * 🔹 Protegge le pagine riservate.
 */

class Roles {
    /**
     * 📌 Controlla se l'utente ha un certo ruolo
     */
    public static function hasRole($role) {
        $user = Auth::getUser();
        return $user && $user['role'] === $role;
    }

    /**
     * 📌 Protegge le pagine per Admin
     */
    public static function requireAdmin() {
        if (!self::hasRole('admin')) {
            Notifications::add('error', 'Accesso negato. Solo gli admin possono accedere.');
            header("Location: " . BASE_URL);
            exit;
        }
    }
}
?>
