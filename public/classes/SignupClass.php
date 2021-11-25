<?php

class Signup extends Dbh {

    protected function setUser($firstName, $lastName, $email, $password) {
        $stmt = $this->connect()->prepare("INSERT INTO users (user_firstname, user_lastname, user_email, user_password) VALUES (?, ?, ?, ?);");

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($firstName, $lastName, $email, $hashedPassword))) {
            $stmt = null;
            header("Location: ./../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($email) {
        //$stmt = $this->connect()->prepare("SELECT usersEmail FROM users WHERE usersEmail = :email;");
        $stmt = $this->connect()->prepare("SELECT usersEmail FROM users WHERE usersEmail = ?;");
        /* If use placeholder, you don't need to use bindParam ??? */
        //$stmt->bindParam(':email', $email);
        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header('Location: ./../index.php?error=stmtfailed_while_checking_user');
            exit();
        }

        $resultCheck;
        if ($stmt->rowCount() > 0) {
            $resultCheck = true;
        } else {
            $resultCheck = false;
        }

        return $resultCheck;
    }
}
