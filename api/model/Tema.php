<?php

//Connect to databse
require_once "Conexion.php";

class Tema extends Conexion
{

    public function __construct(){
        parent::__construct();
    }

    // READ
    public function get_all()
    {
        $result = $this->conexion_db->query("SELECT * FROM tbl_temas");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}

?>