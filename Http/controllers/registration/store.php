<?php
use Core\Database;
use Core\App;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];


$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = "Neplatná emailová adresa.";
}

if (!Validator::string($password, 8, 255)) {
    $errors['password'] = "Heslo musí mít alespoň 8 znaků.";
}

if (!empty($errors)) {
    view('registration/create.view.php', [
        'banner' => 'Registrace nového uživatele',
        'errors' => $errors
    ]);
    exit;
}




$user = $db->query("SELECT * FROM users WHERE email = :email", [
    'email' => $email,
])->find();
if ($user) {

    header('Location: /moje_stranka/');
}else {
    $db->query("INSERT INTO users (email, password) VALUES (:email, :password)", [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);

    login([
        'email' => $email,
        'id' => $db->connection->lastInsertId()
    ]);

    header('Location: /moje_stranka/');
}