<?php
class Database{
    /* Database properties */
private $host = 'localhost'; 
private $db_name = 'malinsvens_webb3projekt';
private $username = 'malinsvens_webb3projekt';
private $password = 'PollyPassword';

private $conn;

    /* Database connection */
    public function connect()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                'mysql:host=' . $this->host . ';db_name=' . $this->db_name,
                $this->username,
                $this->password,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Fel vid koppling: ' . $e->getMessage();
        }
        return $this->conn;
    }
}