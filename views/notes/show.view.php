<?php

require base_path('views/partials/head.php');  // Zahrnutí hlavičky HTML 
require base_path('views/partials/nav.php'); // Zahrnutí navigace 
require base_path('views/partials/banner.php'); // Zahrnutí banneru

?>

<main>
    <p><?php echo htmlspecialchars($note['body']); ?></p>
    <form method="POST" action="/moje_stranka/note">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?php echo $note['id'] ?>">
        <button class="button-delete">Smazat poznámku</button>
    </form>
</main>

<?php
require base_path('views/partials/footer.php'); // Zahrnutí patičky HTML