<?php
/**
 * GESTIONE SESSIONI
 * -----------------
 * 🔹 Controlla e gestisce le sessioni in tutto il progetto.
 * 🔹 Avvia automaticamente la sessione se non è già attiva.
 */

class Session {
    /**
     * 📌 Avvia la sessione se non è già stata avviata
     */
    public static function start() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    /**
     * 📌 Imposta una variabile di sessione
     */
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    /**
     * 📌 Recupera una variabile di sessione
     */
    public static function get($key) {
        return $_SESSION[$key] ?? null;
    }

    /**
     * 📌 Distrugge la sessione (logout)
     */
    public static function destroy() {
        session_unset();
        session_destroy();
    }
}

// 📌 Avviamo la sessione automaticamente
Session::start();
?>
