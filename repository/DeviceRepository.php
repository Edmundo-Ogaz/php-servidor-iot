<?php

class DeviceRepository extends conexion {

    public function conectardb() {
        $conectar = new mysqli(self::servidor, self::user,self::pass,self::db);
        if($conectar->connect_errno){
            die("Error en la conexión".$conectar->connect_error);
        }
        return $conectar;
    }

    public function findBy($id) {

        $query = "SELECT * FROM device WHERE devide_id = '$id'";
        $select = mysqli_query(conectardb(), $query);
    }

}

?>