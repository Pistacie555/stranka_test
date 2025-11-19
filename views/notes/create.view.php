<?php

require base_path('views/partials/head.php');  // Zahrnutí hlavičky HTML 
require base_path('views/partials/nav.php'); // Zahrnutí navigace 
require base_path('views/partials/banner.php'); // Zahrnutí banneru

?>

<main>

    <form method="POST" action="/moje_stranka/notes">
        <div>
            <label for="body">Text poznámky:</label><br>
            <textarea id="body" name="body" rows="4" cols="50"><?=  htmlspecialchars($_POST['body'] ?? '') ?></textarea>
        </div>
        <br>
        <button class="button-add">Uložit poznámku</button>
    </form>

<?php if (isset($errors['body'])) : ?> 
    <p style="color: red;"><?php echo htmlspecialchars($errors['body']); ?></p>
<?php endif; ?>

</main>


<?php
require base_path('views/partials/footer.php'); // Zahrnutí patičky HTML