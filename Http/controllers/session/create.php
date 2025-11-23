<?php

use Core\Session;

view('session/create.view.php', [
    'banner' => "Login",
    'errors' => Session::get('errors') ?? []
]);