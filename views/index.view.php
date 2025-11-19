<?php

require base_path('views/partials/head.php');  // Zahrnutí hlavičky HTML 
require base_path('views/partials/nav.php'); // Zahrnutí navigace 
require base_path('views/partials/banner.php'); // Zahrnutí banneru
?>

<main>
    <?php
    // Příklad PHP kódu
    echo "<p>Dnešní datum je " . date("d.m.Y") . ".</p>";
    ?>
</main>

<?php
require base_path('views/partials/footer.php'); // Zahrnutí patičky HTML