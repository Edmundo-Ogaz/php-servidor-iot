<?php

namespace repository;

class DeviceHistoryRepository extends conexion {

    public function findBy($device_id) {

        $query = "SELECT * FROM device_history WHERE idDevice = '$device_id'";
        $result = mysqli_query(conexion::conectardb(), $query);

        $myArray = array();
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
        }

        $result->close();

        return $myArray;
    }

}

?>