<?php

class Login extends Dbh {

    protected function getUser($email, $password) {

        $stmt = $this->connect()->prepare('SELECT user_password FROM users WHERE user_email = ?;');

        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("Location: ./../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("Location: ./../index.php?error=usernotfound_1");
            exit();
        }

        $hashedPassword = $stmt->fetchAll(PDO::FETCH_ASSOC)[0]["user_password"];
        $checkPassword = password_verify($password, $hashedPassword);

        if ($checkPassword == false) {
            $stmt = null;
            header("Location: ./../index.php?error=wrongpassword");
            exit();
        } else {
            $stmt = $this->connect()->prepare("SELECT * FROM users WHERE user_email = ? AND user_password = ?;");

            if (!$stmt->execute(array($email, $hashedPassword))) {
                $stmt = null;
                header("Location: ./../index.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("Location: ./../index.php?error=usernotfound_2");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["user_id"] = $user[0]["user_id"];
            $_SESSION["user_email"] = $user[0]["user_email"];
            $_SESSION["user_firstname"] = $user[0]["user_firstname"];
            $_SESSION["user_lastname"] = $user[0]["user_lastname"];
        }

        $stmt = null;
    }
}
