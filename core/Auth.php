<?php
require_once '../config/config.php';
require_once 'Session.php';

/**
 * SISTEMA DI AUTENTICAZIONE UTENTI
 * --------------------------------
 * 🔹 Gestisce login, logout e sessioni.
 * 🔹 Protegge l'accesso alle pagine riservate.
 * 🔹 Usa hashing per le password.
 */

class Auth
{
    /**
     * 📌 Login utente
     */
    public static function login($email, $password)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM utenti WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            Session::set('user', $user);
            return true;
        }
        return false;
    }

    /**
     * 📌 Controlla se un utente è loggato
     */
    public static function isLoggedIn()
    {
        return Session::get('user') !== null;
    }

    /**
     * 📌 Logout utente
     */
    public static function logout()
    {
        Session::destroy();
        header("Location: " . BASE_URL);
        exit;
    }

    /**
     * 📌 Recupera i dati dell'utente loggato
     */
    public static function getUser()
    {
        return Session::get('user');
    }
}
