<?php
use Core\App;
use Core\Database;


$db = App::resolve(Database::class);
$currentUserId = 3; // Předpokládané ID přihlášeného uživatele


$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view('notes/edit.view.php', [
    'banner' => 'Edit poznámky',
    'errors' => [],
    'note' => $note
]);
