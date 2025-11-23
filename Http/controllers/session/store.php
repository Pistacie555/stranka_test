<?php
use Core\Session;
use Core\Authenticator;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {
    if ((new Authenticator)->attempt($email, $password)) {
        redirect('/moje_stranka/');
    }

    $form->error('email', 'Pod tímto emailem a heslem není žádný uživatel registrován.');
}

Session::flash('errors', $form->errors());
Session::flash('old', [
    'email' => $email
]);

redirect('/moje_stranka/login');
