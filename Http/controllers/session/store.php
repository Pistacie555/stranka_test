<?php

use Core\App;
use Core\Database;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if (!$form->validate($email, $password)) {
    return view('session/create.view.php', [
        'banner' => 'Přihlášení uživatele',
        'errors' => $form->errors()
    ]);
}


$user = $db->query("SELECT * FROM users WHERE email = :email", [
    'email' => $email,
])->find();

if ($user) {
    if (password_verify($password, $user['password'])) {
        login($user);
        header('Location: /moje_stranka/');
        exit;
    }
}

return view('session/create.view.php', [
    'banner' => 'Přihlášení uživatele',
    'errors' => [
        'password' => 'Pod tímto emailem a heslem není žádný uživatel registrován.'
    ]
]);
