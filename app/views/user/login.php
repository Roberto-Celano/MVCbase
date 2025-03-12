<?php require '../app/views/layouts/header.php'; ?>
<h2>Login</h2>
<form action="<?= BASE_URL ?>user/authenticate" method="POST">
    <label>Email:</label>
    <input type="email" name="email" required>
    
    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Accedi</button>
</form>
<a href="<?= BASE_URL ?>user/register">Non hai un account? Registrati</a>
<?php require '../app/views/layouts/footer.php'; ?>