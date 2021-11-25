<?php

class Dbh {
    // Reference - https://www.php.net/manual/en/pdo.connections.php
    protected function connect() {
        try {
            // TODO pass these variables through docker-compose.yml
            $servername = "mysql";
            $port = 3306;
            $username = "custom_db_user";
            $password = 1111;
            $db = "custom_db";

            $conn = new PDO("mysql:host=$servername;port=$port;dbname=$db", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch(PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

