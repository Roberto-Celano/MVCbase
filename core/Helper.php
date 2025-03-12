<?php
/**
 * FUNZIONI UTILI PER TUTTI I PROGETTI MVC
 * --------------------------------------
 * 🔹 Contiene funzioni comuni come redirect e sanificazione input.
 */

class Helper {
    public static function redirect($url) {
        header("Location: " . BASE_URL . $url);
        exit;
    }

    public static function sanitizeInput($data) {
        return htmlspecialchars(strip_tags(trim($data)));
    }
}




