<?php
/**
 * SISTEMA DI NOTIFICHE
 * ---------------------
 * 🔹 Memorizza messaggi temporanei nella sessione.
 * 🔹 Permette di mostrare notifiche all'utente.
 */

class Notifications {
    /**
     * 📌 Aggiunge una notifica alla sessione
     */
    public static function add($type, $message) {
        if (!isset($_SESSION['notifications'])) {
            $_SESSION['notifications'] = [];
        }
        $_SESSION['notifications'][] = ['type' => $type, 'message' => $message];
    }

    /**
     * 📌 Recupera e rimuove tutte le notifiche
     */
    public static function get() {
        $messages = $_SESSION['notifications'] ?? [];
        unset($_SESSION['notifications']);
        return $messages;
    }
}
?>