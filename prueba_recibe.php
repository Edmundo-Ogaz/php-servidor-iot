<?php

    require_once('conexion.php');

    $device = $_GET['device_label'];
    $temperature = $_GET['temperature'];
    $humidity = $_GET['humidity'];

    $conn = new conexion();

    $query = "SELECT * FROM device_state WHERE idDevice = '$device'";
    $select = mysqli_query($conn->conectardb(), $query);

    if($select->num_rows) {
        $query = "UPDATE device_state SET temperatura = $temperature, humedad=$humidity WHERE idDevice= '$device'";
        $update = mysqli_query($conn->conectardb(), $query);

        $query = "INSERT INTO device_history(idDevice, variable, valor, fecha) VALUES('$device', 'temperatura', $temperature, NOW())";
        $insert = mysqli_query($conn->conectardb(), $query);

        $query = "INSERT INTO device_history(idDevice, variable, valor, fecha) VALUES('$device', 'humedad', $humidity, NOW())";
        $insert = mysqli_query($conn->conectardb(), $query);

        $query = "INSERT INTO entry(field1, field2, created_at) VALUES($temperature, $humidity, NOW())";
        $insert = mysqli_query($conn->conectardb(), $query);

        echo "DATOS RECIBIDOS<br>";

        echo "{DEVICE:".$device.", TEMP:".$temperature.", HUMI:".$humidity."}";
    }
    else {
        echo "*** LA TARJETA NO EXISTE ***<br>";
    }

?>