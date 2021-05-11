<?php

namespace repository;

class EntryRepository extends conexion {

    public function findByDeviceName($deviceName, $limit = 100) {

        $query = "SELECT * FROM entry WHERE device_name = '$deviceName' ORDER BY entry_id DESC limit $limit";
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