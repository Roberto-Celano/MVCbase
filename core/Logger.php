<?php
/**
 * GESTIONE LOG
 * -----------
 * 🔹 Registra errori critici e debugging.
 * 🔹 Salva i log in un file per monitorare il sito.
 */

 class Logger {
    public static function log($level, $message, $context = []) {
        $logFile = "../logs/error.log";
        $date = date('Y-m-d H:i:s');
        $contextStr = json_encode($context);
        $logEntry = "[$date] $level: $message $contextStr\n";
        file_put_contents($logFile, $logEntry, FILE_APPEND);
    }

    public static function error($message, $context = []) {
        self::log('ERROR', $message, $context);
    }

    public static function logException($exception) {
        self::log('EXCEPTION', $exception->getMessage(), [
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
            'trace' => $exception->getTraceAsString()
        ]);
    }
}
?>
