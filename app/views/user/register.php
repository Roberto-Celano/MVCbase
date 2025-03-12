<?php require '../app/views/layouts/header.php'; ?>
<h2>Registrazione</h2>
<form action="<?= BASE_URL ?>user/store" method="POST">
    <label>Nome:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Registrati</button>
</form>
<a href="<?= BASE_URL ?>user/login">Hai già un account? Accedi</a>
<?php require '../app/views/layouts/footer.php'; ?>
