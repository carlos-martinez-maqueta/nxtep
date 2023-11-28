<?php

//Connect to databse
require_once "Conexion.php";

class Area extends Conexion
{

    public function __construct(){
        parent::__construct();
    }

    // READ
    public function get_all()
    {
        $result = $this->conexion_db->query("SELECT * FROM tbl_areas");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get_by_id($id)
    {
        $result = $this->conexion_db->query("SELECT * FROM tbl_areas WHERE id_area='$id' LIMIT 1");
        return $result->fetch_assoc();
        
    }

}

?>