<?php

class SignupController extends Signup {

    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $passwordConfirm;

    public function __construct($firstName, $lastName, $email, $password, $passwordConfirm) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password; 
        $this->passwordConfirm = $passwordConfirm;
    }

    public function signupUser() {
        if ($this->emptyInputSignup() == true) {
            header("Location: ./../index.php?error=emptyinput");
            exit();
        }
        if ($this->invalidEmail() == true) {
            header("Location: ./../index.php?error=email");
            exit();
        }
        if ($this->passwordsMatch() == false) {
            header("Location: ./../index.php?error=passwordsmatch");
            exit();
        }

        $this->setUser($this->firstName, $this->lastName, $this->email, $this->password);
    }

    protected function emptyInputSignup() {
        // Returns true if some of the fields is empty 
        return (empty($this->firstName) || empty($this->lastName) || empty($this->email) || empty($this->password) || empty($this->passwordConfirm));
    }
    
    protected function invalidUserName() {
        // Returns true if user first name or last name is invalid
        $nameRegExp = "/^[a-zA-Z-' ]*$/";
        return !(preg_match($nameRegExp, $this->firstName) || preg_match($nameRegExp, $this->lastName));
    }
    
    protected function invalidEmail() {
        // Returns true if email is invalid
        return !filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }
    
    protected function passwordsMatch() {
        // Returns true if passwords match
        return ($this->password === $this->passwordConfirm);
    }
    
    protected function userExists($conn, $email) {
        // Returns true if user exists
        return $this->checkUser($conn, $email);
    }
}
