<?php

class LoginController extends Login {

    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function loginUser() {
        if ($this->emptyInputLogin() == true) {
            header("Location: ./../index.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->email, $this->password);
    }

    protected function emptyInputLogin() {
        // Returns true if some of the fields is empty 
        return (empty($this->email) || empty($this->password));
    }

}
