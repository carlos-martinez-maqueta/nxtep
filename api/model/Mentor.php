<?php

//Connect to databse
require "Conexion.php";

class Mentor extends Conexion
{

    public function __construct(){
        parent::__construct();
    }

    // READ
    public function get_all()
    {
        $result = $this->conexion_db->query("SELECT * FROM tbl_mentores");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get_by_id($id)
    {
        $result = $this->conexion_db->query("SELECT * FROM tbl_mentores WHERE id='$id' LIMIT 1");
        return $result->fetch_assoc();
        
    }

}

?>