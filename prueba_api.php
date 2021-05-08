<?php

    require_once('conexion.php');

    $conn = new conexion();

    $query = "SELECT * FROM device_history WHERE idDevice = 'tarjeta1'";
    $result = mysqli_query($conn->conectardb(), $query);

    if($result->num_rows) {
        // $line = "";
        // while($obj = $result->fetch_object()){
        //     $line.=$obj->idDevice;
        //     $line.=$obj->temperatura;
        //     $line.=$obj->humedad;

        // }
        // header('Content-Type: application/json');
        // echo json_code($line);

        $myArray = array();
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
        }
        header('Content-Type: application/json');
        echo json_encode($myArray);

    }
    else {
        echo "*** LA TARJETA NO EXISTE ***<br>";
    }

    // $result->close();
    // $conn->close();

?>