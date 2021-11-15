<?php

class Dbh {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "devrix";

    protected function connect() {
        try {
            $dbh = new PDO('mysql:host=' . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password );

            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}