<?php
namespace Http\Forms;
use Core\Validator;

class LoginForm
{
    protected $errors = [];
    public function validate($email, $password)
    {

        if (!Validator::email($email)) {
            $this->errors['email'] = "Neplatná emailová adresa.";
        }

        if (!Validator::string($password, 1,5)) {
            $this->errors['password'] = "Heslo musí být správné.";
        }

        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }
}
