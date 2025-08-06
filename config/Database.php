<?php

class Database
{
    private  $conn = null;
    private  $username = "c##tousif";
    private  $password = "tousif";
    private  $conncectionString = "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=localhost)(PORT=1521))(CONNECT_DATA=(SERVICE_NAME=xe)))";

    public  function getConnection()
    {
        $this->conn = oci_connect($this->username, $this->password, $this->conncectionString);

        if (!$this->conn) {
            $error = oci_error();
            die("Connection Failed: " . htmlentities($error['message'], ENT_QUOTES));
        }
        return $this->conn;
    }
}