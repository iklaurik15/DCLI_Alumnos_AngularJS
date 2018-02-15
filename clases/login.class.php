<?php
include_once ("conexion.class.php");

class Login{
    var $db;
    
    function Login(){
        $this->db = conectar::conexion();
    }
    
    public function loguear() {
        $sql="SELECT * FROM rolak ";
        foreach ($this->db->query($sql) as $res){
            $this->usuarios[]=$res;            
        }
        return $this->usuarios;
    }
}
    

