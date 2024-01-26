<?php
class User_model
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getUser($email, $password)
    {
        $this->db->query("SELECT * FROM mst_user WHERE email = :email AND password = :password");
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);

        return $this->db->resultSet();
    }
}
