<?php
require base_path('views/partials/head.php');  // Zahrnutí hlavičky HTML 
require base_path('views/partials/nav.php'); // Zahrnutí navigace 
require base_path('views/partials/banner.php'); // Zahrnutí banneru

?>

<main>

    <form method="POST" action="/moje_stranka/note">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?php echo $note['id'] ?>">
        <div>
            <label for="body">Edit poznámky:</label><br>
            <textarea id="body" name="body" rows="4" cols="50"><?=  htmlspecialchars($note['body'] ?? '') ?></textarea>
        </div>
        <br>
        <button class="button-add">Update</button>
    </form>
    <a href="/moje_stranka/notes" class="button-back">Zpět</a>

<?php if (isset($errors['body'])) : ?> 
    <p style="color: red;"><?php echo htmlspecialchars($errors['body']); ?></p>
<?php endif; ?>

</main>


<?php
require base_path('views/partials/footer.php'); 