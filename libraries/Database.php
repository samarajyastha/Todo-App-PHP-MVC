<?php

class Database
{
    private $host = DB_HOST;
    private $username = DB_USER;
    private $password = DB_PASS;
    private $dbName = DB_NAME;

    public function __construct()
    {
        // Set Data Source Name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->db = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            $this->err = $e->getMessage();
            echo $this->err;
        }
    }
}
