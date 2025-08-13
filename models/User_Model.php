<?php
require_once __DIR__ . "/../config/Database.php";

class User
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
    }

    public function register($username, $password, $role = 'guest')
    {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO user_info(user_name, user_pass, user_role) VALUES(:username, :password, :role)";
        $stmt = oci_parse($this->db, $sql);

        oci_bind_by_name($stmt, ':username', $username);
        oci_bind_by_name($stmt, ':password', $hashed_password);
        oci_bind_by_name($stmt, ':role', $role);

        return oci_execute($stmt, OCI_COMMIT_ON_SUCCESS);
    }

    public function login($username, $password)
    {
        $sql = "SELECT * FROM user_info WHERE user_name = :username";
        $stmt = oci_parse($this->db, $sql);
        oci_bind_by_name($stmt, ':username', $username);
        oci_execute($stmt);

        $existing_user = oci_fetch_assoc($stmt);

        if ($existing_user && password_verify($password, $existing_user['USER_PASS'])) {
            return $existing_user;
        }

        return false;
    }
}
