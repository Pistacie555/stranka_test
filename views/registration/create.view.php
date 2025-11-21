<?php


require base_path('views/partials/head.php');  // Zahrnutí hlavičky HTML 
require base_path('views/partials/nav.php'); // Zahrnutí navigace 
require base_path('views/partials/banner.php'); // Zahrnutí banneru

?>

<main>

    <p> Registrace nového uživatele</p>

    <form method="POST" action="/moje_stranka/register">
        <br>
        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>
        </div>

        <?php if (isset($errors['email'])) : ?>
            <p style="color: red;"><?php echo htmlspecialchars($errors['email']); ?></p>
        <?php endif; ?>
        <br>
        <div>
            <label for="password">Heslo:</label><br>
            <input type="password" id="password" name="password">
        </div>
        <?php if (isset($errors['password'])) : ?>
            <p style="color: red;"><?php echo htmlspecialchars($errors['password']); ?></p>
        <?php endif; ?>
        <br>
        <button class="button-add">Registrovat</button>
    </form>


</main>


<?php
require base_path('views/partials/footer.php'); // Zahrnutí patičky HTML