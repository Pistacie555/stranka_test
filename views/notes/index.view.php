<?php


require base_path('views/partials/head.php');  // Zahrnutí hlavičky HTML 
require base_path('views/partials/nav.php'); // Zahrnutí navigace 
require base_path('views/partials/banner.php'); // Zahrnutí banneru

?>

<main>
    <ul>
        <?php foreach ($notes as $note): ?>
            <li class="seznam">
                <a href="/moje_stranka/note?id=<?php echo htmlspecialchars($note['id']); ?>">
                    <?php echo htmlspecialchars($note['body']); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <p>
        <a href="/moje_stranka/notes/create" class="button-add">Přidat poznámku</a>
    </p>

</main>


<?php
require base_path('views/partials/footer.php'); // Zahrnutí patičky HTML