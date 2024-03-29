<?php

class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db_name = 'asisten_iclabs';

    private $dbh;
    private $stmt;

    public function __construct()
    {
        // Koneksi ke database
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    // function untuk membuat dan siapkan query  (ex. select, insert, dll)
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    // where,  set, into values. Parameter. function ini mengecek tipe nya otomatis
    // agar terhindar dari sql injection
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type =  PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type =  PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type =  PDO::PARAM_NULL;
                    break;
                default:
                    $type =  PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    // function untuk mengeksekusi query
    public function execute()
    {
        try {
            $this->stmt->execute();
        } catch (Exception $e) {
            echo $e;
        }
    }

    // function untuk mengambil banyak data
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // function untuk mengambil satu data
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount () {
        return $this->stmt->rowCount();
    }
}
