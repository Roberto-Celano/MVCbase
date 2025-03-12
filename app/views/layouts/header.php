<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Il mio sito MVC' ?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/style.css">
</head>
<body>
<header>
    <h1>Benvenuto nel mio framework MVC!</h1>
</header>
<main>
<?php if ($messages = Notifications::get()): ?>
    <div class="notifications">
        <?php foreach ($messages as $msg): ?>
            <div class="alert alert-<?= $msg['type'] ?>">
                <?= $msg['message'] ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
