<?php
use Core\Authenticator;
(new Authenticator)->logout();
header('Location: /moje_stranka/');
exit;