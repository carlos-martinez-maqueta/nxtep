<?php

//Connect to databse
require_once "Conexion.php";

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
    
    public function get_by_area($id)
    {
        $result = $this->conexion_db->query("SELECT * FROM tbl_mentores tm
                                                INNER JOIN tbl_mentores_areas tma ON tm.id=tma.mentor_id 
                                                WHERE tma.area_id='$id' ");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get_by_search($search)
    {
        $result = $this->conexion_db->query("SELECT * FROM tbl_mentores 
        WHERE nombres LIKE '%$search%'
        OR apellidos LIKE '%$search%'
        OR cargo LIKE '%$search%'
        OR empresa LIKE '%$search%' ");
        return $result->fetch_all(MYSQLI_ASSOC);
    }



    public function get_by_id($id)
    {
        $result = $this->conexion_db->query("SELECT * FROM tbl_mentores WHERE id='$id' LIMIT 1");
        return $result->fetch_assoc();
        
    }

}

?>