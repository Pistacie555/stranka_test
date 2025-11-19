<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors   = [];

if (! Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'Text poznámky je povinný a nesmí být delší než 1000 znaků.';
}

if (! empty($errors)) {
    return view('notes/create.view.php', [
        'banner' => 'Vytvořit novou poznámku',
        'errors' => $errors
    ]);
}


$db->query("INSERT INTO notes (body, user_id) VALUES (:body, :user_id)", [
    'body' => $_POST['body'],
    'user_id' => 3  // Předpokládané ID přihlášeného uživatele
]);

header('Location: /moje_stranka/notes');
exit;
