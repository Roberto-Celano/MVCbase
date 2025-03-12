<?php require '../app/views/layouts/header.php'; ?>
<h1>Errore 404</h1>
<p>La pagina che stai cercando non esiste. Verrai reindirizzato alla home tra <span id="countdown">5</span> secondi...</p>
<a href="<?= BASE_URL ?>">Torna alla Home</a>

<script>
    let count = 5;
    const countdown = document.getElementById("countdown");

    setInterval(() => {
        count--;
        countdown.textContent = count;
        if (count <= 0) {
            window.location.href = "<?= BASE_URL ?>";
        }
    }, 1000);
</script>

<?php require '../app/views/layouts/footer.php'; ?>
