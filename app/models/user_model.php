<<<<<<< HEAD
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
=======
<?php
class User_Model
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getUserByEmail($email)
    {
        $query = "SELECT * FROM mst_user WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
>>>>>>> c95246166e96f463a7b4b95b6190081f1b993c7b
