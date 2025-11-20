<?php
use Core\Validator;
use Core\App;
use Core\Database;


$db = App::resolve(Database::class);

$currentUserId = 3;

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$errors = [];
if (! Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'Text poznámky je povinný a nesmí být delší než 1000 znaků.';
}

if (! empty($errors)) {
    return view('notes/edit.view.php', [
        'banner' => 'Edit poznámky',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query("UPDATE notes SET body = :body WHERE id = :id", [
    'body' => $_POST['body'],
    'id' => $note['id']
]);

header('Location: /moje_stranka/notes');
exit;