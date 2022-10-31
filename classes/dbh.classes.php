<?php
class Dbh {
    protected function connect() {
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=csci490fa22team3', $username, $password);

            //$socket = '/var/run/mysqld.sock'; // or: /tmp/mysqld.sock
            //$dbh = new mysqli('ccuresearch.coastal.edu', 'csci490fa22team3', 'csci490fa22team3!', "csci490fa22team3", 3306, $socket);
            // $db = mysql_connect('localhost:'.$socket, 'username', 'password');
            return $dbh;
        } 
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}