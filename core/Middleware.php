<?php

require_once 'Auth.php';
require_once 'Roles.php';

class Middleware {
    /**
     * 📌 Protegge le pagine riservate agli utenti loggati
     */
    public static function requireAuth() {
        if (!Auth::isLoggedIn()) {
            header("Location: " . BASE_URL . "user/login");
            exit;
        }
    }

    /**
     * 📌 Protegge le pagine riservate agli amministratori
     */
    public static function requireAdmin() {
        if (!Roles::hasRole('admin')) {
            header("Location: " . BASE_URL);
            exit;
        }
    }
}

